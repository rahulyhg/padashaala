<?php

namespace App\Model;

use App\Model\ProductAdditional;
use App\Model\ProductFaq;
use App\Model\ProductFeature;
use App\Model\ProductImage;
use App\Model\ProductSeo;
use App\Model\ProductSpecifaction;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'product_name',
        	'product_price',
            'discount_percentage', 
    ];

    public function features(){
    	return $this->hasMany(ProductFeature::class);
    }

    public function faqs(){
    	return $this->hasMany(ProductFaq::class);
    }

    public function seos(){
    	return $this->hasMany(ProductSeo::class);
    }

    public function specifications(){
    	return $this->hasMany(ProductSpecifaction::class);
    }

    public function additonials(){
        return $this->hasMany(ProductAdditional::class);
    }

    public function images(){
    	return $this->hasMany(ProductImage::class);
    }
}
