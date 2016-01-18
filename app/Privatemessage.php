<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privatemessage extends Model
{
    protected $table = 'privatemessage';

	protected $fillable = [

		'name', 
		'email', 
		'message'
		
	];

	/*//returns submit of any private message
	public function item()
	{
		return $this->belongsTo('App\Item', 'message');
	}
*/
}