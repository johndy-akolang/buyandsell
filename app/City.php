<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected  $table = 'city';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     *
     * TODO: rename 'citylist' to 'name'
     */
    protected $fillable = [
        'citylist'
    ];


    public function item()
    {
    	return $this->hasMany('App\Item');
    }

}
