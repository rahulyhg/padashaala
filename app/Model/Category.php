<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use Sluggable;

	protected $fillable=[
		'name',
		'description',
		'parent_id'
	];
	public function sluggable() {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
