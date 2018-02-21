<?php

namespace App\Http\ViewComposers;

// use App\Helpers\PaginationHelper;
use App\Model\Category;
use App\Repositories\Contracts\CategoryRepository;
use Illuminate\View\View;

class ProductCategoryListComposer {
	// use PaginationHelper;
	/**
	 * @var CategoryRepository
	 */
	private $category;

	public function __construct( CategoryRepository $category ) {
		$this->category = $category;
	}

	/**
	 * Bind data to the view.
	 *
	 * @param View $view
	 */
	public function compose( View $view ) {
		// $categories = Category::where('parent_id', 0)->take(10)->get();
		$categories = $this->category->getCategories()->take(10);
// $cat=$this->category->getCategories()->take(5);
		$view->with( 'productCategories', $categories );
        // ->with( 'cat', $cat );
	}
}