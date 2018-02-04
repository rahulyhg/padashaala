<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'user_id',
        	'first_name',
            'last_name', 
            'phone',
            'address', 
            'email',
            'city', 
            'state',
    ];

    public function User(){
    	return $this->belongsTo(App\Model\User::class);
    }
    }
}
