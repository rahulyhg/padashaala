<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	return view('category.index', compact('categories'));
    }

    public function show()
    {
    	$categories = Category::where('parent_id', '0')->get();
    	return view('category.categorylist', compact('categories'));
    }
}
