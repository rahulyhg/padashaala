<?php

namespace App\Repositories\Eloquent;

use App\Model\Category;
use App\Repositories\Contracts\CategoryRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCategoryRepository extends AbstractRepository implements CategoryRepository
{
    public function entity()
    {
        return Category::class;
    }
}
