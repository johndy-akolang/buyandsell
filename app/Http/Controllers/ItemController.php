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


class ItemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $items = Item::paginate(10);
        return view('item.index')->with('items', $items);

    }

    public function create(Request $request)
    {
        //if user can post i.e. user is seller or guest
        if ($request->user()->can_post())
        {
            $city = \DB::table('city')->lists('citylist', 'id');
            $province = \DB::table('province')->lists('provincelist', 'id');
            $condition = \DB::table('condition')->lists('conditionitem', 'id');
            $category = \DB::table('category')->lists('categorylist', 'id');

            return view('item.create')->with('city', $city)->with('province', $province)->with('condition', $condition)->with('category', $category);

        } else {

            return redirect('item.create')->withErrors('restricted');
        }


        // display city select dropdown for item
        /*$city = \DB::table('city')->lists('citylist', 'id');
        $province = \DB::table('province')->lists('provincelist', 'id');
        $condition = \DB::table('condition')->lists('conditionitem', 'id');
        $category = \DB::table('category')->lists('categorylist', 'id');

        return view('item.create')->with('city', $city)->with('province', $province)->with('condition', $condition)->with('category', $category);*/
		
    }


    public function store(ItemRequest $request)
    {

        

        /*$validation = Validator::make($request->all(), [

            'title'     =>  'required',
            'price'     =>  'required',
            'condition' =>  'required',
            'category' =>  'required',
            'description' => 'required',
            'images'    =>  'required|mimes:jpeg,jpg,png|max:1000',
            'province'  =>  'required',
            'city'      =>  'required',
            'mobile'    =>  'required|numeric',

        ]);

        if ( $validation->fails() ) {
            return redirect()->back()->withInput()
                            ->with('errors', $validation->errors());
        }*/

        $item = new Item;

        $file = $request->file('images');
        $destination_path = 'images/uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);

        $item->images = $destination_path . $filename;
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

    public function show($id)
    {

        $item = Item::find($id);
        return view('item.show')->with('item', $item);

    }


    public function edit($id)
    {

        $item = Item::find($id);
        return view('item.edit')->with('item', $item);

    }

	public function update(Request $request, $id)
    {

        //validation
        $validation = \Validator::make($request->all(), [

            'title'     =>  'required',
            //'user_id'   =>  'required',
            'price'     =>  'required',
            'condition' =>  'required',
            'category' =>  'required',
            'description' => 'required',
            'images'    =>  'sometimes|mimes:jpeg,jpg,png|max:1000',
            'province'  =>  'required',
            'city'      =>  'required',
            'mobile'    =>  'required|numeric',

        ]);

        //check if it fails
        if ($validation->fails()) {
            return redirect()->back()->withInput()
                            ->with('errors', $validation->errors() );
        }

        //process valid data & go to success page
        $item = Item::find($id);

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $destination_path = 'images/uploads/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $file->move($destination_path, $filename);

            $item->images = $destination_path . $filename;
        }

        $item->title = $request->input('title');
        $item->price = $request->input('price');
        $item->condition = $request->input('condition');
        $item->category = $request->input('category');
        $item->description = $request->input('description');
        $item->province = $request->input('province');
        $item->city = $request->input('city');
        $item->mobile = $request->input('mobile');
        $item->save();

        return redirect('/item')->with('message','You just updated an image!');

    }

    public function destroy($id)
    {

        /*Item::find($id)->delete();
        return redirect('item.manage');*/

    }

    public function search(Request $request)
    {

        //Get the query string from our form submission
        $query = Request::input('search');

        // Returns an array of articles that have the query string located someqhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $items = DB::table('item')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);

        // returns a view and passes the view the list of items and the original query.
        return view('search.result', compact('items', 'query'));

    }

    
}
