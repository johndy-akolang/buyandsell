<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\City;


class ItemController extends Controller
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

    public function view()
    {
        return view('item.view');
    }

    public function sellitem()
    {
        // display city select dropdown for item

        $city = \DB::table('city')->lists('citylist', 'id');
        $province = \DB::table('province')->lists('provincelist', 'id');
        $condition = \DB::table('condition')->lists('conditionitem', 'id');
        $category = \DB::table('category')->lists('categorylist', 'id');

        return view('item.sellitem')->with('city', $city)->with('province', $province)->with('condition', $condition)->with('category', $category);

    }

    public function manageitem()
    {
        return view('item.manageitem');
    }

    public function updateitem()
    {
        return view('item.updateitem');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

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
