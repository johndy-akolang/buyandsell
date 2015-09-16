<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model 
{

	//comments table in database
	protected $guarded = [];

	//user who has commented
	public function user()
	{
		return $this->belongsTo('App\User', 'from_user');
	}

	//returns post of any comment
	public function item()
	{
		return $this->belongsTo('App\Item', 'on_post');
	}


}