<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VendorDetail extends Model
{
    protected $fillable = [
    	'pan_no', 
    	'documents', 
    	'shop_description', 
    	'citizenship_no', 
    	'longitude', 
    	'latitude',
    ];

    public function vendors()
    {
    	return $this->belongsTo(Vendor::class);
    }
}
