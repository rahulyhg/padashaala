<?php

namespace App\Model;

use App\Model\VendorDetails;
use Illuminate\Database\Eloquent\Model;

class VendorDocument extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'vendor_id',
        	'title',
        	'image',
    ];

    public function documents(){
    	return $this->belongsTo(VendorDetails::class);
    }
}
