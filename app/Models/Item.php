<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected $table = 'item';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     *
     * TODO: add 'user_id'
     * TODO: 'condition' should be 'condition_id'
     * TODO: 'category' should be 'category_id'
     * TODO: 'images' should be 'primary_image'
     * TODO: what is the purpose of province?
     * TODO: what is the purpose of city?
     * TODO: what is the purpose of mobile?
     */
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
    		'mobile',
    ];

  	public function comments()
  	{
        // TODO: 'on_post' should be 'item_id'
    		return $this->hasMany('App\Comments', 'on_post');
  	}

  	// returns  the instance of the user who is author of that post
  	public function guest()
  	{
        // TODO: 'guest_id' should be 'user_id'
    		return $this->belongsTo('App\User', 'guest_id');
  	}
}
