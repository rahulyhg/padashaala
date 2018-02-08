<?php

namespace App\Model;

use App\Concern\Mediable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
   use Sluggable, Mediable;
    protected $fillable = [
    	'name',
    	'company_name',
    	'slug'
    ];

    public function products()
    {
    	return $this->hasMany(Product::class, 'product_id', 'id');
    }

   

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
