<?php

namespace App\Repositories\Eloquent;

use App\Helpers\Image\LocalImageFile;
use App\Model\Brand;
use App\Model\Media;
use App\Repositories\Contracts\BrandRepository;
use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentBrandRepository extends AbstractRepository implements BrandRepository
{
    public function entity()
    {
        return Brand::class;
    }

    public function store(array $attributes)
    {
    	$brands = $this->entity->create($attributes);

    	// Upload image
		if ( isset( $attributes['image'] ) ) {
        try {
			$media = new Media();
			$media->upload( $brands, $attributes['image'], '/uploads/brands/' );
            return $attributes['image'];
            return $brands;
        } catch (Exception $e) {
            return $e;
        }
    }
    }

    public function updateBrand( $id, array $attributes ) {
        $brand = $this->entity->findOrFail( $id );
        // Upload image
        if ( isset( $attributes['image'] ) ) {
            // Delete old image from file system
            $path = optional($brand->media()->first())->path;
            $this->deleteImage( $path );

            // Clean database links
            $brand->media()->delete();

            // Upload new image
            $media = new Media();
            $media->upload( $brand, $attributes['image'], '/uploads/brands/' );
        }

        $brand->update( $attributes );

        return $brand;
    }

    public function deleteBrand( $id ) {
        $brand = $this->entity->find( $id );

        // Delete image
        $path = optional($brand->media()->first())->path;
        $this->deleteImage( $path );

        // Clean image database links
        $brand->media()->delete();

        $brand->delete();

        return true;
    }

    public function deleteImage( $path ) {
        if ( null === $path ) {
            return false;
        }

        $localImageFile = new LocalImageFile( $path );
        $localImageFile->destroy();

        return true;
    }
}
