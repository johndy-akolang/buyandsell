<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected  $table = 'category';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     */
    protected $fillable = [
        'categorylist'
    ];


    /*public function item()
    {
    	return $this->hasMany('App\Item');
    }*/

}
