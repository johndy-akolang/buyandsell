<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table = ['category'];


    protected $fillable = [
        'categorylist'
    ];


    /*public function item()
    {
    	return $this->hasMany('App\Item');
    }*/

}
