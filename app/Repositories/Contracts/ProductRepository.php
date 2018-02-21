<?php

namespace App\Repositories\Contracts;

interface ProductRepository
{
    public function store(array $attributes);
}
