<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Repositories\Contracts\VendorRepository;
use Illuminate\Http\Request;

class VendorController extends Controller
{
	private $vendorRepository;

	public function __construct(VendorRepository $vendorRepository)
	{
		$this->vendorRepository = $vendorRepository;
	}

    // public function vendor_details()
    // {
    // 	return view('vendors.vendor_details');
    // }

    // public function store(VendorRequest $request)
    // {
    // 	$this->vendorRepository->create($request->all());
    // }
}
