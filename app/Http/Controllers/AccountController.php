<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Item;

class AccountController extends Controller
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

    public function user()
    {
        return view('account.user');
    }

    /**
     * Display active item of particular user.
     *
     * @param int $id
     * @return view
     */
    public function user_post($id)
    {
        //
        $item = Item::where('author_id', $id)->where('active', 1)->orderBy('created_at', 'desc')->paginate(10);
        $title = Users::find($id)->first_name;
        return view('home')->withItem($item)->withTitle($title);
    }

    /**
     * Display all of the active item of particular user.
     *
     * @param Request $request
     * @return view
     */
    public function user_posts_all(Request $Request)
    {
        //
        $user = $Request->user();
        $item = Item::where('author_id', $id)->where('active', 1)->orderBy('created_at', 'desc')->paginate(10);
        $title = $user->first_name;
        return view('home')->withItem($item)->withTitle($title);
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
    public function store()
    {
        //
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
     * @param  int  $id
     * @return Response
     */
    public function update($id)
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
