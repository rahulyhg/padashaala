<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function getDashboard()
    {
    	return view('vendor.dashboard');
    }

    // for_product

    public function getProduct()
    {
    	return view('vendor.pages.product.index');
    }
    public function getProductCreate()
    {
        return view('vendor.pages.product.create');
    }

    // for_order

    public function getOrder()
    {
        return view('vendor.pages.order.index');
    }
    public function getOrderCreate()
    {
        return view('vendor.pages.order.create');
    }

    // for_configuration

	public function getConfiguration()
    {
    	return view('vendor.pages.configuration.index');
    }
}
