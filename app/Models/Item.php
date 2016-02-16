<?php
namespace App\Models;

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
     * TODO: rename 'guest_id' to 'user_id'
     * TODO: 'condition' should be 'condition_id'
     * TODO: 'category' should be 'category_id'
     * TODO: 'images' should be 'primary_image'
     * TODO: what is the purpose of province?
     * TODO: what is the purpose of city?
     * TODO: what is the purpose of mobile?
     */
    protected $fillable = [
    		'title',
    		'guest_id',
    		'price',
    		'condition',
    		'category',
    		'description',
    		'images',
    		'province',
    		'city',
    		'mobile',
    ];

    /**
     * Eloquent relationship for Comment
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
  	public function comments()
  	{
        // TODO: 'on_post' should be 'item_id'
    		return $this->hasMany(Comments::class, 'on_post');
  	}

  	/**
  	 * Eloquent relationship for User
  	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  	 */
  	public function guest()
  	{
        // TODO: 'guest_id' should be 'user_id'
    		return $this->belongsTo(User::class, 'guest_id');
  	}
}
