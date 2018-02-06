<?php

namespace App\Repositories\Eloquent;

use App\Model\Brand;
use App\Repositories\Contracts\BrandRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentBrandRepository extends AbstractRepository implements BrandRepository
{
    public function entity()
    {
        return Brand::class;
    }
}
