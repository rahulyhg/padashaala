<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
    	'username', 
    	'email', 
    	'password',
    ];

    public function vendor_address_details()
    {
    	return $this->hasMany(VendorAddressDetail::class);
    }

    public function vendor_details()
    {
    	return $this->hasMany(VendorDetail::class);
    }
    
}
