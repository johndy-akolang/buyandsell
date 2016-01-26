<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

		/**
		 * Table used by the model
		 * @var string $table
		 */
		protected $table = 'comments';

		/**
		 * Attributes that are mass assignable
		 * @var array $fillable
		 *
		 * TODO: 'on_post' should be 'item_id'
		 * TODO: 'from_user' should be 'user_id'
		 */
		protected $fillable = [
			'on_post', // item_id
			'from_user', // user_id
			'body',
		];

		//user who has commented
		public function guest()
		{
			return $this->belongsTo('App\User', 'from_user');
		}

		//returns post of any comment
		public function item()
		{
			return $this->belongsTo('App\Item', 'on_post');
		}


}
