<?php

namespace App\Model;

use App\Model\UserAddress;
use App\Model\UserDetails;
use App\Model\VendorDetails;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
            'token', 
            'email',
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

    public function userDetails(){
       return $this->hasMany(UserDetails::class);
    }

    public function userAddress(){
       return $this->hasMany(UserAddress::class);
    }

    public function vendorDeatils(){
       return $this->hasMany(VendorDetails::class);
    }
}
