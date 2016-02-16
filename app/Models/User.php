<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'mobile', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    // user has many item
    public function item()
    {
        // TODO: rename 'guest_id' to 'user_id'
        return $this->hasMany('App\Item', 'guest_id');
    }


    // user has may comments
    public function comments()
    {
        // TODO: rename 'from_user' to 'user_id'
        return $this->hasMany('App\Comments', 'from_user');
    }


    public function can_post()
    {
        $role = $this->role;

        if ($role == 'guest' || $role == 'seller')
        {
            return true;
        }
        return false;
    }

    public function is_seller()
    {
        $role = $this->role;

        if ($role == 'seller')
        {
            return true;
        }
        return false;
    }

}
