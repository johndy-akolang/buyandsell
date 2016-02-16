<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ItemRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Condition;
use App\Models\Privatemessage;
use App\Models\Province;
use App\Models\User;
use App\Repositories\CategoryRepository;
use App\Repositories\CityRepository;
use App\Repositories\ConditionRepository;
use App\Repositories\ItemRepository;
use App\Repositories\ProvinceRepository;
use Auth;
use Mail;
use Redirect;
use Validator;
//use Illuminate\Pagination\Paginator;


class ItemController extends Controller
{

    /**
     * Class constructor
     * @param ItemRepository $item
     */
    public function __construct(
        CategoryRepository $category,
        CityRepository $city,
        ConditionRepository $condition,
        ItemRepository $item,
        ProvinceRepository $province
    )
    {
        $this->categoryRepo = $category;
        $this->cityRepo = $city;
        $this->conditionRepo = $condition;
        $this->itemRepo = $item;
        $this->provinceRepo = $province;
    }

    /**
     * Display a listing of the resource items or ads.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = $this->itemRepo->getActiveItems();

        return view('item.index')->with(compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        //if user can post i.e. user is seller or guest
        if ($request->user()->can_post()) {
            $cities = $this->cityRepo->getAllCities();
            $provinces = $this->provinceRepo->getAllProvinces();
            $conditions = $this->conditionRepo->getAllConditions();
            $categories = $this->categoryRepo->getAllCategories();

            return view('item.create')
                ->with(compact('cities'))
                ->with(compact('provinces'))
                ->with(compact('conditions'))
                ->with(compact('categories'));

        } else {
            return redirect('item.create')
                ->withErrors('You have not sufficient permissions for writing item');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ItemRequest $request)
    {
        //$user = User::where('email', $email)->first();

        // new item create
        $item = new \App\Models\Item();

        // upload images and stored filed
        $file = $request->file('images');
        $destination_path = 'images/uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);
        $item->images = $destination_path . $filename;
        //item = $this->images->upload($item);

        // details item or ads
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

        // models
        $itemPostTitle = $item->title; // title item new post
        $itemPostSlug = $item->slug; //title item new post slug
        $loggedInUser = Auth::user(); // user logged in

        // email from, to and subject
        $to = $loggedInUser->email;
        $subject = $item->title;

        // email template variables
        $emailData = [
          'user' => sprintf('%s %s', $loggedInUser->first_name, $loggedInUser->last_name),
          'url' => sprintf('%s/%s', 'http://www.koll.com.ph/item', $itemPostSlug),
          'subject' => $itemPostTitle,
        ];

        // mailing notifications
        Mail::send('emails.item', $emailData, function($message) use ($to, $subject) {
            $message->to($to);
            $message->subject($subject);
        });

        $item->save();

        return redirect('item')->withMessage($message);

    }


    /*
    * Display the specified resource.
    *
    * @param int $id
    * @return Response
    */
    public function show($slug)
    {
        // paginate featured ads at right side
        $featured = Item::paginate(8);

        // item show with slug or title
        $items = Item::where('slug', $slug)->first();
        if ($items) {
            if ($items->active == false) {
                return redirect('/')->withErrors('requested page not found');
                $comments = $items->comments;
            }
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

        $item = Item::where('slug', $slug)->first();
        if($item && ($request->user()->id == $item->guest_id || $request->user()->is_seller()))

            // select forms
            $city = \DB::table('city')->lists('citylist', 'citylist');
            $province = \DB::table('province')->lists('provincelist', 'provincelist');
            $condition = \DB::table('condition')->lists('conditionitem', 'conditionitem');
            $category = \DB::table('category')->lists('categorylist', 'categorylist');

            return view('item.edit')->with('item', $item)->with('city', $city)->with('province', $province)->with('condition', $condition)->with('category', $category);
            return redirect('/')->withErrors('you have not sufficient permissions');
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

        if ($item && ($item->guest_id == $request->user()->id || $request->user()->is_seller()))
        {
            $title = $request->input('title');
            $slug = str_slug($title);
            $duplicate = Item::where('slug', $slug)->first();

            if ($duplicate)
            {
                if ($duplicate->id != $item_id)
                {
                    return redirect('edit/'.$item->slug)->withErrors('Title already exists.')->withInput();
                } else {
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

            if ($request->has('save'))
            {
                $item->active = 0;
                $message = 'Item saved successfully';
                $landing = 'edit/'.$item->slug;
            } else {
                $item->active = 1;
                $message = 'Item updated successfully';
                $landing = 'item/'.$item->slug;
            }

            $item->save();
            return redirect($landing)->withMessage($message);

        } else {
            return redirect('/')->withErrors('restricted');
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
        /*
        $item = Item::find($id);

        if ($item && ($item->guest_id == $request->user()->id || $request->user()->is_seller())) {
            $item->delete();
            $data['message'] = 'Item deleted Successfully';
        } else {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }

        return redirect('/')->with($data);*/

    }

    /**
     * Show featured ads ramdomly by category.
     *
     */
    public function featured()
    {

        return view('item.show', compact('featured'));

    }


    /**
     * Search specific item
     *
     */
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

    /**
     * GUest send private message to seller. Non-user only.
     *
     */
    public function getMail(Request $request)
    {

        $input['name'] = $request->get('name');
        $input['email'] = $request->get('email');
        $input['message'] = $request->get('message');
        $slug = $request->input('slug');

        // models
        $newMessage = Privatemessage::create($input);
        $item = Item::where('slug', $slug)->first();
        $itemOwner = $item->guest;

        // email from, to and subject
        $to = $itemOwner->email;
        $subject = $item->title;

        // email templates
        $emailData = [
            'user' => sprintf('%s %s', $itemOwner->first_name, $itemOwner->last_name),
            'sndmsgtxt' => $newMessage->message,
            'url' => sprintf('%s/%s', 'http://www.koll.com.ph/item', $slug),
            'subject' => $item->title,
        ];

        // email template
        Mail::send('emails.emailitem', $emailData, function($message) use ($to, $subject) {
            $message->to($to);
            $message->subject($subject);
        });

        return redirect::back()->with('message', 'Thank you');

    }


}
