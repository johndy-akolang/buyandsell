<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;
use Input;
use View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function showLogin()
    {

        // show the form
        return View::make('login');


//        // Getting all post data
//        $data = Input::all();
//
//        // Applying validation rules.
//        $rules = array(
//            'email' => 'required|email',
//            'password'  => 'required|min:8',
//        );
//
//        $validator = Validator::make($data, $rules);
//        if($validator->fails()) {
//            // If validation fails redirect back to login.
//
//            return Redirect::to('/login')->withInput(Input::except('password'))->withErrors($validator);
//        }
//        else {
//            $userdata = array(
//                'email' => Input::get('email'),
//                'password'  => Input::get('password')
//            );
//
//            // doing login
//            if (Auth::validate($userdata)) {
//                if (Auth::attempt($userdata)) {
//                    return Redirect::intended('/');
//                }
//            }
//            else {
//                // if any error send back with message
//                /*Session::flash('error', 'Something went wrong');
//                return Redirect::to('login');*/
//                return redirect()->back()->with('error', 'Something went wrong')->with('order_value', $userdata);
//            }
//        }
    }

    public function doLogin()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email' => 'required|email', // make sure the email is an actual email
            'password'  => 'required|alphaNum|min:3' // password can only be alphanumeric
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInputs(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email' => Input::get('email'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                if (Auth::attempt($userdata)) {
                    return Redirect::intended('/loginsuccess');
                }

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                //echo 'Success!';

            } else {
                // validation not successful, send back to form
                return Redirect::to('login');
            }
        }

    }

    public function doLogout()
    {
        Auth::logout(); // logout user
        return Redirect::to('login'); // redirect back to login
    }

    public function loginsuccess()
    {
        return view('loginsuccess');
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
