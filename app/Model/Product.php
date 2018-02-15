<?php

namespace App\Model;

use App\Model\ProductAdditional;
use App\Model\ProductFaq;
use App\Model\ProductFeature;
use App\Model\ProductImage;
use App\Model\ProductSeo;
use App\Model\ProductSpecifaction;
use App\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
public function sluggable() {
        return [
            'slug' => [
                'source' => ['product_name']
            ]
        ];
    }
   
    protected $fillable = [
            'product_name',
            'product_price',
            'discount_percentage',
            'sku',
            'stock_quantity',
            'out_of_stock', 
            'long_description', 
            'short_description', 
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

    public function additionals(){
        return $this->hasMany(ProductAdditional::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
