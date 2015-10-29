<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AuthTraits\RedirectsUsers;
use App\User;
use Validator;
use View;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    use RedirectsUsers;

    protected $redirectTo = '/loginsuccess';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    public function register()
    {
        return View::make('register');
    }

    public function postRegister(Request $request)
    {
        $validator = $request->all();

        Auth::login($this->create($request->all()));

        return redirect($this->redirectPath());
    }

    /*
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname'  => 'required|max:255',
            'mobile'    => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|confirmed|min:6',
            'password_confirmation'  => 'required|confirmed|min:6',
        ]);
    }

    /*
     * Create a new user instance after a valid registration.
     *
     *
     * @param array $data
     * @return User
     *
     */

    protected function create(array $data)
    {

        return User::create([
            'first_name'    =>  $data['firstname'],
            'last_name'     =>  $data['lastname'],
            'mobile'        =>  $data['mobile'],
            'email'         =>  $data['email'],
            'password'      =>  bcrypt($data['password']),
        ]);

    }



}
