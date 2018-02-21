<?php

namespace App\Repositories\Eloquent;

use App\Model\Vendor;
use App\Repositories\Contracts\VendorRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentVendorRepository extends AbstractRepository implements VendorRepository
{
    public function entity()
    {
        return Vendor::class;
    }
}
