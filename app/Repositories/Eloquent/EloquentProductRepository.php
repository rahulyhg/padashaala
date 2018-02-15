<?php

namespace App\Repositories\Eloquent;

use App\Model\Product;
use App\Repositories\Contracts\ProductRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentProductRepository extends AbstractRepository implements ProductRepository
{
    public function entity()
    {
        return Product::class;
    }

	public function store(array $attributes)
	{
 		// dd($attributes);
		$product = $this->entity->create($attributes);
		// // $product->faqs()->create([
		// // 	'question'=>$attributes['question'],
		// // 	'answer'=>$attributes['answer'],

		// // ]);

		// // $product->seos()->create([
		// // 	'meta_keyword' => $attributes['meta_keyword'],
		// // 	'meta_description' => $attributes['meta_description'],
		// // ]);
		

			$titles       = $attributes['specifications']['title'];
			$descriptions = $attributes['specifications']['description'];

			$specificationsKeys = array_keys( $titles );

			foreach ( $specificationsKeys as $specification ) {
				// Create specification
				$product -> specifications()->create( [
					'product_id'  => $product->id,
					'title'       => $titles[ $specification ],
					'description' => $descriptions[ $specification ],
				] );
			}
		
			
			// 'title' => $attributes['specifications_title'],
			// 'description' => $attributes['specifications_description'],
		

		// $product->additionals()->create([
		// 	'key' => $attributes['key'],
		// 	'value' => $attributes['value'],
		// ]);

			$titles       = $attributes['features']['title'];

			$featuresKeys = array_keys( $titles );

			foreach ( $featuresKeys as $feature ) {
				// Create specification
				$product -> features()->create( [
					'product_id'  => $product->id,
					'feature'       => $titles[ $feature ],
				] );
			}
		
	}

	public function deleteProduct($id)
	{
		$product = $this->entity->find($id);
		$this->delete($id);
		$product->faqs()->delete();
		$product->specifications()->delete();
		$product->features()->delete();
		$product->seos()->delete();
		$product->additionals()->delete();
		$product->images()->delete();
	}

	public function getAll()
	{
		$products = $this->entity->all();
		$products->features()->all();
	}

	public function editProducts($id)
	{
		$this->entity->find($id);
	}

	public function updateProducts(array $id, array $attributes)
	{
		$this->entity->update($id, $attributes);
	}
}
