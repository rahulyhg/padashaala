<?php

namespace App\Repositories\Contracts;

interface UserRepository
{
    public function store(array $attributes);
    public function all();
}
