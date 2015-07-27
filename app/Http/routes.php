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

Route::get('about', 'AboutController@index');

Route::get('login', 'LoginController@login');
Route::get('loginsuccess', 'LoginController@loginsuccess');

Route::get('register', 'RegisterController@register');

Route::get('account/user', 'AccountController@user');

Route::get('item/view', 'ItemController@view');
Route::get('item/sellitem', 'ItemController@sellitem');
Route::get('item/manageitem', 'ItemController@manageitem');
Route::get('item/updateitem', 'ItemController@updateitem');

Route::get('message/inbox', 'MessageController@inbox');
Route::get('message/viewmessage', 'MessageController@viewmessage');
Route::get('message/sent', 'MessageController@sent');

Route::get('legal/terms', 'LegalController@terms');
Route::get('legal/privacy', 'LegalController@privacy');


Route::get('/', 'HomeController@index');

/*Route::get('/', function () {
    return view('welcome');
});*/
