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
	
	/*public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function category()
	{
		return $this->belongsTo('App\Category');
	}*/


}
