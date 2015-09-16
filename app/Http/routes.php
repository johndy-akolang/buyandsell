<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('account/{id}', 'AccountController@user')->where('id', '[0-9]+');

Route::get('about', 'AboutController@index');

// route to show the login form
Route::get('login', 'LoginController@showLogin');
// route to process the form
Route::post('login', 'LoginController@doLogin');
// route to logout
Route::get('logout', 'LoginController@doLogout');

// if login success this template
Route::get('loginsuccess', 'LoginController@loginsuccess');

Route::get('register', 'RegisterController@register');
Route::post('register', 'RegisterController@postRegister');

/*Route::controllers([
    //'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/

Route::get('account/user', 'AccountController@user');

/*Route::resource('item', 'ItemController');*/



Route::get('message/inbox', 'MessageController@inbox');
Route::get('message/viewmessage', 'MessageController@viewmessage');
Route::get('message/sent', 'MessageController@sent');

Route::get('legal/terms', 'LegalController@terms');
Route::get('legal/privacy', 'LegalController@privacy');


Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['auth']], function() 
{
	Route::resource('item', 'ItemController');

	Route::get('account/index', 'AccountController@index');

});

