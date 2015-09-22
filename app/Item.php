<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';

	protected $fillable = [

		'title', 
		//'user_id', 
		'price', 
		'condition', 
		'category', 
		'description', 
		'images', 
		'province', 
		'city', 
		'mobile'
		
	];


	public function comments()
	{
		return $this->hasMany('App\Comments', 'on_post');
	}
	
	// returns  the instance of the user who is author of that post
	public function guest()
	{
		return $this->belongsTo('App\User', 'guest_id');
	}


}
