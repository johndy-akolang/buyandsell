<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Comments;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //on_post, from_user, body
        $input['from_user'] = $request->user()->id;
        $input['on_post'] = $request->input('on_post');
        $input['body'] = $request->input('body');
        $slug = $request->input('slug');

        // models
        $newComment = Comments::create($input);
        $item = Item::where('slug', $slug)->first();
        $itemOwner = $item->guest;
        $loggedInUser = Auth::user(); // user logged in

        // email from, to and subject
        $from = $loggedInUser->email;
        $to = $itemOwner->email;
        $subject = $item->title;

        // email template variables
        $emailData = [
          'user' => sprintf('%s %s', $itemOwner->first_name, $itemOwner->last_name),
          'body' => $newComment->body,
          'url' => sprintf('%s/%s', 'http://www.koll.com.ph/item', $slug),
        ];

        Mail::send('emails.emailitem', $emailData, function($message) use ($from, $to, $subject) {
            $message->from($from);
            $message->to($to);
            $message->subject($subject);
        });

        return redirect::back()->with('message', 'Comment Published');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
