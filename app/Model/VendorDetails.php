<?php

namespace App\Model;

use App\Model\ProductFeature;
use App\User;
use App\Model\VendorDocument;
use Illuminate\Database\Eloquent\Model;

class VendorDetails extends Model
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'user_id',
            'name',
        	'description',
        	'type',
        	'pan_number',
        	'email',
        	'phone',
        	'address',
        	'logo',
        	'seo_keywords',
        	'seo_description',
    ];

    
	public function user(){
    	return $this->belongsTo(User::class);
    }

    public function categories(){
    	return $this->hasMany(ProductFeature::class);
    }

    public function documents(){
    	return $this->hasMany(VendorDocument::class);
    }
}
