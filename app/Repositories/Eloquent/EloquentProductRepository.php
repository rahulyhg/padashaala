<?php

namespace App\Repositories\Eloquent;

use App\Model\Product;
use Repositories\Contracts\ProductRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentProductRepository extends AbstractRepository implements ProductRepository
{
    public function entity()
    {
        return Product::class;
    }
}
