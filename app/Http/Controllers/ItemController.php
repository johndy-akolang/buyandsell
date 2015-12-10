<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ItemRequest;
use App\Http\Controllers\Controller;
use App\Item;
use Validator;
use App\City;
use App\Category;
use App\Condition;
use App\Province;
use App\User;
use Redirect;
//use Illuminate\Pagination\Paginator;


class ItemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $items = Item::where('active', 1)->orderBy('created_at', 'desc')->paginate(12);
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

        /* email after create item */
        \Mail::send('emails.emailitem',
            array(
                'title' => $request->get('title')
                ), function($emessage) {
                $emessage->from('admin@koll.com.ph');
                $emessage->to('admin@koll.com.ph', 'Admin')->subject('About your advertisement');
            });


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

        $featured = Item::paginate(3);
        $items = Item::where('slug', $slug)->first();
        

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

        return view('item.edit')->with(compact('item'));*/
        $item = Item::where('slug', $slug)->first();
        if($item && ($request->user()->id == $item->guest_id || $request->user()->is_seller()))

            $city = \DB::table('city')->lists('citylist', 'citylist');
            $province = \DB::table('province')->lists('provincelist', 'provincelist');
            $condition = \DB::table('condition')->lists('conditionitem', 'conditionitem');
            $category = \DB::table('category')->lists('categorylist', 'categorylist');

            return view('item.edit')->with('item', $item)->with('city', $city)->with('province', $province)->with('condition', $condition)->with('category', $category);

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
        if($item && ($item->guest_id == $request->user()->id || $request->user()->is_seller()))
        {
            $title = $request->input('title');
            $slug = str_slug($title);
            $duplicate = Item::where('slug',$slug)->first();
            if($duplicate)
            {
                if($duplicate->id != $item_id)
                {
                    return redirect('edit/'.$post->slug)->withErrors('Title already exists.')->withInput();
                }
                else 
                {
                    $item->slug = $slug;
                }
            }
            
            $item->title = $title;
            $item->description = $request->input('description');
            $item->price = $request->input('price');
            $item->condition = $request->input('condition');
            $item->category = $request->input('category');
            $item->description = $request->input('description');
            $item->province = $request->input('province');
            $item->city = $request->input('city');
            $item->mobile = $request->input('mobile');
            $item->slug = str_slug($item->title);
            $item->guest_id = $request->user()->id;
            
            if($request->has('save'))
            {
                $item->active = 0;
                $message = 'Post saved successfully';
                $landing = 'edit/'.$item->slug;
            }           
            else {
                $item->active = 1;
                $message = 'Post updated successfully';
                $landing = $item->slug;
            }
            $item->save();
            return redirect($landing)->withMessage($message);
        }
        else
        {
            return redirect('/')->withErrors('You have not sufficient permissions');
        }

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

    public function getSearch(Request $request)
    {
        //Validation class maybe ? TODO
        if(!$request->has('q')) {
            return redirect('home')
                ->withErrors('You must make a search from the bar first');
        }
        
        //Let's escape first
        $parameters = e($request->get('q'));

        $parameters = explode(',', $parameters);
        //Values may be like "param1", "param2" after exploding, so we also need to trim them
        array_walk($parameters, 'trim');

        $items = Item::with('guest')

        //Let's search the title first
        ->where(function($q) use ($parameters) {

            $j = 0;
            foreach ($parameters as $parameter) {
                
                if($j == 0) {
                    $q->where('title', 'LIKE', '%'.$parameter.'%');
                } else {
                    $q->orWhere('title', 'LIKE', '%'.$parameter.'%');
                }

                $j++;
            }
        })

        //Lastly, let's search in the user name
        ->orWhere(function($q) use ($parameters) {

            $q->whereHas('guest', function($q2) use ($parameters) {

                $j = 0;
                foreach ($parameters as $parameter) {
                    
                    if($j == 0) {
                        $q2->where('first_name', 'LIKE', '%'.$parameter.'%');
                    } else {
                        $q2->orwhere('first_name', 'LIKE', '%'.$parameter.'%');
                    }

                    $j++;
                }
            });
        })


        ->orderBy('id', 'desc')
        //$featured = Item::paginate(3);
        ->paginate(12);


        return view('home')
            ->withTitle('Search results for: '.implode(', ', $parameters))
            ->withItems($items);

    }

    
}
