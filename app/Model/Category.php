<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use Sluggable;

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable() {
		return [
			'slug' => [
				'source' => 'name'
			]
		];
	}

	protected $fillable = [
		'parent_id',
		'name',
		'slug',
	];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function getParentAttribute() {
		return Category::where( 'id', '=', $this->attributes['parent_id'] )->first();
	}

	public function parent()
	{
	    return $this->belongsTo('App\Model\Category', 'parent_id');
	}

	public function children()
	{
	    return $this->hasMany('App\Model\Category', 'parent_id');
	}
}
