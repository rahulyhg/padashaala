<?php

namespace App\Repositories\Eloquent;

use App\Model\Brand;
use App\Model\Media;
use App\Repositories\Contracts\BrandRepository;
use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentBrandRepository extends AbstractRepository implements BrandRepository
{
    // private $model;
    // public function __construct(Brand $model)
    // {
    //     $this->model=$model;
    // }
    public function entity()
    {
        return Brand::class;
    }

    public function store(array $attributes)
    {
    	$brands = $this->entity->create($attributes);

    	// Upload image
		// if ( isset( $attributes['image'] ) ) {
        try {
			$media = new Media();
			$media->upload( $brands, $attributes['image'], '/uploads/brands/' );
            return $brands;// }
        }
        } catch (Exception $e) {
            

    }
}
