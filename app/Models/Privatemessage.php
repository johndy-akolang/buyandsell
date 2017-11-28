<?php
namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Privatemessage extends Model
{
    /**
     * Table used by the model
     * @var string $table
     */
    protected $table = 'privatemessage';

    /**
     * Attributes that are mass assignable
     * @var array $fillable
     */
	  protected $fillable = [
            'sender_id',
            'receiver_id',
    		'name',
    		'email',
    		'message',
            'read'
	  ];

protected $appends = ['sender', 'receiver'];

public function getSenderAttributes()
{
    return User::where ('id', $this->sender_id)->first();
}
public function getReceiverAttributes()
{
    return User::where ('id', $this->receiver_id)->first();
}

public function getCreatedAtAttribute($value)
    {
        $carbon = new Carbon($value);
        return $carbon->diffForHumans();
    }
 


    
}
