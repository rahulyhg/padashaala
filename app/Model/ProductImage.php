<?php

namespace App\Model;

use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'product_id',
            'image',
            'main_image',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
