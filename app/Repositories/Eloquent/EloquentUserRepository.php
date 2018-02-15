<?php

namespace App\Repositories\Eloquent;

use App\Model\User;

use App\Repositories\Contracts\UserRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserRepository extends AbstractRepository implements UserRepository
{
	private $model;
	public function __construct(User $model){
		$this->model = $model;
	}
    public function entity()
    {
        return User::class;
    }
    public function store(array $attributes){
    	$user = $this->model->create($attributes);
    	$user->userDetails()->create([
    		'gender' => $attributes['gender'],
    		'DOB' => $attributes['DOB'],
    		]);
    }
    public function userupdate( $id, array $attributes ) {
        $user = $this->model->update($attributes);
        $user->userDetails()->update([
            'gender' => $attributes['gender'],
            'DOB' => $attributes['DOB'],
            ]);
    }

    public function all(){
        return $this->model->all();
    }
}
