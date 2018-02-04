<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'user_id',
        	'gender',
            'DOB', 
    ];


    public function user(){
    	return $this->belongsTo(App\Model\User::class);
    }
}
