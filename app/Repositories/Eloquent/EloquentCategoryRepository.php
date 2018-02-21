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

    public function getAll() {
		return $this->entity->all();
	}

	public function getById( $id ) {
		return $this->entity->findOrFail( $id );
	}

	public function create( array $attributes ) {
		return $this->entity->create( $attributes );
	}

	public function update( $id, array $attributes ) {
		$category = $this->getById( $id );
		$category->update( $attributes );

		return $category;

	}

	public function delete( $id ) {
		$category = $this->getById( $id );
		// Delete from pivot table as well
		$category->products()->detach( $id );

		$category->delete();

		return true;
	}

    public function getCategories() {

		$categories = Category::where( 'parent_id', 0 )->get();

		$categories = $this->addRelation( $categories );

		return $categories;

	}

	public function selectChild( $id ) {
		$categories = Category::where( 'parent_id', $id )->get(); //rooney

		$categories = $this->addRelation( $categories );

		return $categories;

	}

	public function addRelation( $categories ) {

		$categories->map( function ( $item, $key ) {

			$sub = $this->selectChild( $item->id );

			return $item = array_add( $item, 'subCategory', $sub );

		} );

		return $categories;
	}
}
