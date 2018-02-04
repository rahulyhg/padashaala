<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'first_name',
            'last_name', 
            'phone',
            'user_name', 
            'provider',
            'provider_id',
            'token', 'email',
            'password',
            'status',
            'verified',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_details(){
       return $this->hasMany(App\Model\UserDetails::class);
    }
}
