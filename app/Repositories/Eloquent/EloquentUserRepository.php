<?php

namespace App\Repositories\Eloquent;

use App\User;
use App\Repositories\Contracts\UserRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserRepository extends AbstractRepository implements UserRepository
{
    public function entity()
    {
        return User::class;
    }

    public function vendorDetailsStore(array $attributes)
    {
    	$attributes['user_id']=auth()->id();
    	$this->entity->vendorDetails()->create($attributes);
    }

    public function getVendorDetails()
    {
    	$this->entity->vendorDetails()->all();
    }

    public function updateVendorDetails( $id, array $attributes ) {
        // $vendor_details = $this->entity->vendorDetails()->findOrFail( $id );
        // dd($vendor_details);
        // Upload image
        // if ( isset( $attributes['image'] ) ) {
        //     // Delete old image from file system
        //     $path = optional($brand->media()->first())->path;
        //     $this->deleteImage( $path );

        //     // Clean database links
        //     $brand->media()->delete();

        //     // Upload new image
        //     $media = new Media();
        //     $media->upload( $brand, $attributes['image'], '/uploads/brands/' );
        // }

        // $vendor_details->vendorDetails()->update( $attributes );

        // return $vendor_details;
    }
}
