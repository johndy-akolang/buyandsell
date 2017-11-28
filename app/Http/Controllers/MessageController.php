<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Condition;
use App\Models\Privatemessage;
use App\Models\Province;
use App\Models\User;
use App\Models\Item;
use App\Repositories\MessageRepository;
use Illuminate\Pagination\LengthAwarePaginator;

use Auth;
use Mail;
use Redirect;
use Validator;


class MessageController extends Controller
{

    /**
     * View message inbox
     * @return \Illuminate\View\View
     */
    public function inbox()
    {
        return view('message.inbox');
    }

    /**
     * Message sent action
     * @return \Illuminate\View\View
     */
    public function sent()
    {
        return view('message.sent');
    }

    /**
     * View message action
     * @return \Illuminate\View\View
     */
    public function viewmessage()
    {
        return view('message.viewmessage');
    }
}
