<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
	
	
	/*protected $fillable = array(
		'title',
		'price',
		'condition',
		'category',
		'description',
		'images',
		'province',
		'city',
		'mobile',
	);*/

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
	
}
