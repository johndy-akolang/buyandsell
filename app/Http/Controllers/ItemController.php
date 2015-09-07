<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Requests\ItemRequest;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\DB;
use App\Item;
use Validator;


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

        /*$items = Item::all();

        return view('item.index', compact('items'));*/

        /*$items = Item::all();
        return view('/', compact('item'));*/
        /*$result = DB::table('item')->get();
        return view('/')->with('data', $result);*/
    }

    public function create()
    {

        // display city select dropdown for item
        $city = \DB::table('city')->lists('citylist', 'id');
        $province = \DB::table('province')->lists('provincelist', 'id');
        $condition = \DB::table('condition')->lists('conditionitem', 'id');
        $category = \DB::table('category')->lists('categorylist', 'id');

        return view('item.create')->with('city', $city)->with('province', $province)->with('condition', $condition)->with('category', $category);
		
		
    }


    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [

            'title'     =>  'required',
            //'user_id'   =>  'required',
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
        }

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
        $item->save();

        return redirect('item')->with('message', 'You just upload an image');
        //create new instance of model to save from form.

        /*$item = new Item([

            'title'     => $request->get('title'),
            'price'     => $request->get('price'),
            'condition' => $request->get('condition'),
            'category'  => $request->get('category'),
            'description' => $request->get('description'),
            'images'    => $request->file('images')->getClientOriginalExtension(),
            'province'  => $request->get('province'),
            'city'      => $request->get('city'),
            'mobile'    => $request->get('mobile'),

        ]);

        //define the image paths
        $destinationFolder = $item->images;
        $destinationThumbnail = '/images/uploads/thumbnails';

        //assign the image paths to new model, so we can save them to DB.
        $item->images = $destinationFolder;

        $item->save();

        //parts of the image we will need
        $file = Input::file('images');

        $imageName = $item->title;
        $extension = $request->file('images')->getClientOriginalExtension();

        //create instance of image from temp uplaod
        $image = Item::make($file->getRealPath());

        //save image with thumbnail
        $image->save(public_path() .$destinationFolder . $imageName . '.' . $extension)
            ->resize(360, 300)
            ->save(public_path() . $destinationFolder . 'thumb-' . $imageName . '.' . $extension);

        //process the upload image, add $model->attribute and folder name
        flash()->success('New ads successfully!');

        return redirect()->route('item.create', [$item]); */  

        /*$item = $this->request->all();
        Item::create($item);
        return redirect('item.create');*/

        /*$this->validate($request, [

            'title' =>  'required',
            'price' =>  'required',
            'condition' =>  'required',
            'category' =>  'required',
            'description' =>  'required',
            'images' =>  'required',
            'province' =>  'required',
            'city' =>  'required',
            'mobile' =>  'required|integer',

        ]);

        $input = $request->all();

        Item::create($input);

        Session::flash('flash_message', 'Ads successfully!');

        return redirect()->back();*/


        /*// create a rule validation
        $rules = array(
            'title' =>  'required',
            'price' =>  'required',
            'condition' =>  'required',
            'category' =>  'required',
            'description' =>  'required',
            'images' =>  'required',
            'province' =>  'required',
            'city' =>  'required',
            'mobile' =>  'required|integer',
        );

        //get all item information
        $itemInfo = Input::all();

        //validate item information with the rules
        $validation = Validator::make($itemInfo, $rules);
        if ($validation->passes())
        {
            //save new item information in the database
            //and redirect to index page
            Item::create($itemInfo);
            return Redirect::route('home')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'Successfully Create new Ads.');
        }

        //show error message
        return Redirect::route('item.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'Some fields are incomplete.');*/
    }

    public function show($id)
    {

        $item = Item::find($id);
        return view('item.show')->with('item', $item);

        /*$item = Item::find($id);
        return view('item.show', compact('item.manage'));*/
    }


    public function edit($id)
    {

        $item = Item::find($id);
        return view('item.edit')->with('item', $item);

        /*$item = Item::find($id);
        return view('item.edit', compact('item.manage'));*/
    }

	public function update($id)
    {
        $itemUpdate = Request::all();
        $item = Item::find($id);
        $item->update($itemUpdate);
        return redirect('item.edit');
    }

    public function destroy($id)
    {
        Item::find($id)->delete();
        return redirect('item.manage');
    }
    
}
