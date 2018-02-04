<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
protected $fillable=[

    'name',
    'slug',
    'sku',
    'short_description',
    'description',
    'track_stock',
    'stock_qty',
    'in_stock',
    'is_taxable',
    'is_featured',
    'disable_price',
    'status',

];
}
