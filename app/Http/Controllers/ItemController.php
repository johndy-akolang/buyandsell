<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ItemRequest;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\DB;
use App\Item;
use Validator;
use App\City;
use App\Category;
use App\Condition;
use App\Province;
use App\User;
use Redirect;
use Illuminate\Pagination\Paginator;
use DB;
/* add */
//use App\Repositories\ItemRepository;
//use Illuminate\Support\Facades\Input;

class ItemController extends Controller
{

    /*protected $images;

    public function __construct(ItemRepository $itemRepository)
    {
        $this->images = $itemRepository;
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $items = Item::where('active', 1)->orderBy('created_at', 'desc')->paginate(9);
        return view('item.index')->withItems($items);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        //if user can post i.e. user is seller or guest
        if ($request->user()->can_post())
        {
            $city = \DB::table('city')->lists('citylist', 'citylist');
            $province = \DB::table('province')->lists('provincelist', 'provincelist');
            $condition = \DB::table('condition')->lists('conditionitem', 'conditionitem');
            $category = \DB::table('category')->lists('categorylist', 'categorylist');

            return view('item.create')->with('city', $city)->with('province', $province)->with('condition', $condition)->with('category', $category);

        } else {

            return redirect('item.create')->withErrors('restricted');
        }
		
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ItemRequest $request)
    {

        $item = new Item;

        $file = $request->file('images');
        $destination_path = 'images/uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);

        $item->images = $destination_path . $filename;
        //item = $this->images->upload($item);
        $item->title = $request->input('title');
        $item->price = $request->input('price');
        $item->condition = $request->input('condition');
        $item->category = $request->input('category');
        $item->description = $request->input('description');
        $item->province = $request->input('province');
        $item->city = $request->input('city');
        $item->mobile = $request->input('mobile');
        $item->slug = str_slug($item->title);
        $item->guest_id = $request->user()->id;

        if ($request->has('save'))
        {

            $item->active = 0;
            $message = 'Post Saved Succesfully';

        } else {

            $item->active = 1;
            $message = 'Your ads published successfully';

        }

        $item->save();

        return redirect('item')->withMessage($message);
        
    }


    /*
    *  Display the specified resource.
    *
    * @param int $id
    * @return Response
    */
    public function show($slug)
    {

        /*$item = Item::find($id);
        return view('item.show')->with('item', $item);*/

        //$cities = Item::with('city')->get();
        $featured = Item::paginate(3);
        $items = Item::where('slug', $slug)->first();
        //$cities = City::all(['id', 'citylist']);
        //$cities = DB::table('city')->get();
        

        //var_dump($cities);
        

        if ($items) 
        {

            if ($items->active == false)
                return redirect('/')->withErrors('requested page not found');
            $comments = $items->comments;
        
        } else {

            return redirect('/')->withErrors('requested page not found');

        }
        //$featured = Item::paginate(8);
        return view('item.show')->withItems($items)->withComments($comments)->with(compact('featured'));

        //var_dump($items->slug());


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request, $slug)
    {

        /*$item = Item::find($id);
        return view('item.edit')->with('item', $item);*/

        $items = Item::where('slug', $slug)->first();

        if($items && ($request->user()->id == $items->guest_id || $request->user()->is_seller())) {  

            $city = \DB::table('city')->lists('citylist', 'id');
            $province = \DB::table('province')->lists('provincelist', 'id');
            $condition = \DB::table('condition')->lists('conditionitem', 'id');
            $category = \DB::table('category')->lists('categorylist', 'id');
            //$condition = ['' => ''] + Condition::lists('conditionitem', 'id')->all();
            //$condition = array('' => 'Select') + Condition::lists('conditionitem', 'id')->toArray(); 

            //return view('item.edit')->with('items', $items);
            return view('item.create')->with('city', $city)->with('province', $province)->with('condition', $condition)->with('category', $category);
        } else {
            return redirect('item.edit')->withErrors('restricted');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
	public function update(Request $request)
    {

        $item_id = $request->input('item_id');
        $item = Item::find($item_id);

        if ($item && ($item->guest_id) == $request->user()->id || $request->user()->is_seller()) {
            $title = $request->input('title');
            $slug = str_slug($title);
            $duplicate = Item::where('slug', $slug)->first();
            if ($duplicate) {
                if ($duplicate->id != $item_id) {
                    return redirect('edit/'.$item->slug)->withErrors('Title already exists.')->withInput();
                } else {
                    $item->slug = $slug;
                }
            }

        }

        $item->title = $title;
        $item->price = $request->input('price');
        $item->condition = $request->input('condition');
        $item->category = $request->input('category');
        $item->description = $request->input('description');
        $item->province = $request->input('province');
        $item->city = $request->input('city');
        $item->mobile = $request->input('mobile');

        if ($request->has('save')) {
            $item->active = 0;
            $message = 'Item saved successfully';
            $landing = 'edit/'.$item->slug;
        } else {
            $item->active = 1;
            $message = 'Post updated successfully';
            $landing = $item->slug;
        }

       $item->save();
       return redirect($landing)->withMessage($message);

    } 


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {

        $item = Item::find($id);
        
        if ($item && ($item->guest_id == $request->user()->id || $request->user()->is_seller())) {
            $item->delete();
            $data['message'] = 'Item deleted Successfully';
        } else {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }

        return redirect('/')->with($data);

    }

    public function featured()
    {

        
        return view('item.show', compact('featured'));

    }

    public function search(Request $request)
    {

        /*$search = $request->input('search');
        $items = $this->blog_gestion->search($this->nbrPages, $search);
        $links = $items->setPath('')->appends(compact('search'))->render();
        $info = trans('partials.header') . '<strong>' . $search . '</strong>';

        return view('home', compact('items', 'links', 'info'));*/

        $title = $request->input('title');
        return view('home')->with('item', Item::where('title', 'like', '%' . $title . '%')->paginate(7));


    }

    
}
