<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected  $table = ['city'];


    protected $fillable = [
        'citylist'
    ];


    public function item()
    {
    	return $this->hasMany('App\Item');
    }

}
