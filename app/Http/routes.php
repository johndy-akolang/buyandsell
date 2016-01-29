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
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('item', ['as' => 'home', 'uses' => 'ItemController@index']);

/* when user login */
Route::group(['middleware' => ['auth']], function() 
{
	Route::get('item', 'ItemController@index');

	// show form create item user
	Route::get('item/create', 'ItemController@create');

	// save new item
	Route::post('item', 'ItemController@store');

	// edit item form
	Route::get('item/edit/{slug}','ItemController@edit');

	// update post 
	Route::post('item/update', 'ItemController@update');

	Route::get('myallitems', 'AccountController@user_posts_all');

	// add comment
	Route::post('comments/add', 'CommentsController@store');

});


// item display single post
Route::get('/item/{slug}',['as' => 'item', 'uses' => 'ItemController@show'])->where('slug', '[A-Za-z0-9-_]+');

// user profile
Route::get('/account/user/{id}', 'AccountController@profile')->where('id', '[0-9]');

// search item
Route::get('search', 'ItemController@getSearch');

// send email message for inquiry item
Route::post('item/sendmail', 'ItemController@getMail');


/*Route::get('account/{id}', 'AccountController@user')->where('id', '[0-9]+');*/
/* koll about */
Route::get('about', 'AboutController@index');
Route::get('about/privacy', 'AboutController@privacy');

// route to show the login form
Route::get('login', 'LoginController@showLogin');
// route to process the form
Route::post('login', 'LoginController@doLogin');
// route to logout
Route::get('logout', 'LoginController@doLogout');

// if login success this template
Route::get('loginsuccess', 'LoginController@loginsuccess');

/* register user */
Route::get('register', 'RegisterController@register');
Route::post('register', 'RegisterController@postRegister');


/*Route::resource('item', 'ItemController');*/

/* this message is temporally disabled */
Route::get('message/inbox', 'MessageController@inbox');
Route::get('message/viewmessage', 'MessageController@viewmessage');
Route::get('message/sent', 'MessageController@sent');

/* legal terms disabled*/
Route::get('legal/terms', 'LegalController@terms');
Route::get('legal/privacy', 'LegalController@privacy');


