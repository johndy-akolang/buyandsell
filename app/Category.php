<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table = ['category'];


    protected $fillable = [
        'categorylist'
    ];


    /*public function ite()
    {
    	return $this->hasMany('App\Item');
    }*/

}
