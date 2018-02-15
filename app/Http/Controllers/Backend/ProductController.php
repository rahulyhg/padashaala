<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Repositories\Contracts\ProductRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
	private $productRepository;
	public function __construct(ProductRepository $productRepository)
	{
		$this->productRepository = $productRepository;
	}
    public function index()
    {
    	$products = $this->productRepository->all();
    	// $products = Product::all();
    	return view('products.index', compact('products'));
    }

    public function store(Request $request)
    {
    	$this->productRepository->store($request->all());
    	// return back();
    }

    public function delete($id)
    {
    	$this->productRepository->deleteProduct($id);
    	// $product = Product::find($id);
    	// $product->delete();
    	return back();
    }

    public function getProductsJson()
    {
     //    $user=Auth::User();
    	// $products = $user->products();
    	       $products = Product::all();

    	return datatables($products)->toJson();
    }

    public function getProductsJson2()
    {
        $user=Auth::User();
        $products = $user->products();
        
        return datatables($products)->toJson();
    }

    public function edit($id)
    {
    	// $products = $this->productRepository->editProducts($id);
    	$products = Product::where('id', $id)->first();
    	// dd($products);
    	return view('products.edit', compact('products'));
    }

    public function update(Request $request)
    {
        // $this->productRepository->updateProducts($request->id, $request->all());
        $products = Product::findOrFail($request->id);
        $products->update($request->all());
        return redirect()->route('products.index');
    }

    public function table()
    {
         $user=Auth::User();
        $all = $user->products()->count();
        $pending=$user->products()->where('approved',0)->count();
        $approved=$user->products()->where('approved',1)->count();
        return view('products.table', compact('all', 'pending', 'approved'));
    }
}
