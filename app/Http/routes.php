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

/*Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('item', ['as' => 'home', 'uses' => 'ItemController@index']);

Route::group(['middleware' => ['auth']], function() 
{
	//Route::resource('item', 'ItemController');
	Route::get('item', 'ItemController@index');

	// show form create item user
	Route::get('item/create', 'ItemController@create');

	// save new item
	Route::post('item', 'ItemController@store');

	// edit item form
	Route::get('item/edit/{slug}','ItemController@edit');

	// update post 
	//Route::post('item', 'ItemController@update');

	Route::get('myallitems', 'AccountController@user_posts_all');

	// add comment
	Route::post('comments/add', 'CommentsController@store');
	/*Route::resource('comment', 'CommentsController');*/

});



// item display single post
Route::get('/item/{slug}',['as' => 'item', 'uses' => 'ItemController@show'])->where('slug', '[A-Za-z0-9-_]+');

// user profile
Route::get('/account/user/{id}', 'AccountController@profile')->where('id', '[0-9]');

// search item
Route::get('search', 'ItemController@getSearch');


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


/*Route::resource('item', 'ItemController');*/



Route::get('message/inbox', 'MessageController@inbox');
Route::get('message/viewmessage', 'MessageController@viewmessage');
Route::get('message/sent', 'MessageController@sent');

Route::get('legal/terms', 'LegalController@terms');
Route::get('legal/privacy', 'LegalController@privacy');


