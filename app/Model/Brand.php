<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Brand extends Model
{
    protected $fillable = [
    	'name',
    	'image',
    	'company_name',
    	'slug'
    ];

    public function products()
    {
    	return $this->hasMany(Product::class, 'product_id', 'id');
    }

    use Sluggable;

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
