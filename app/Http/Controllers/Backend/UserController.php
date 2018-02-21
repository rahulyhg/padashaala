<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Model\VendorDetails;
use App\Repositories\Contracts\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
    	$this->userRepository = $userRepository;
    }

    public function index()
    {
    	// $id = Auth::user()->id;
    	// $vendor_details = VendorDetails::where('user_id',$id)->get();
    	return view('vendors.index');
    }

    public function vendorDetails()
    {
    	return view('vendors.index');
    }

    public function storeVendorDetails(UserRequest $request)
    {
	   	$this->userRepository->vendorDetailsStore($request->all());
	   	return redirect()->back();
    }

    public function getVendorDetails()
    {
    	// $id = Auth::user()->id;
    	$vendor_details = VendorDetails::all();
    	return datatables($vendor_details)->toJson();
    }

    public function delete($id)
    {
    	$delete = VendorDetails::findOrFail($id);
    	$delete->delete();
    }

    public function editVendorDetails($id)
    {
        $vendor_details = VendorDetails::where('id',$id)->first();
        return view('vendors.edit_vendor_details', compact('vendor_details'));
    }

    public function updateVendorDetails(UserRequest $request)
    {
		$vendorDetails=VendorDetails::findOrFail($request->id);
		$vendorDetails->update($request->all());
    }

    public function viewVendorDetails($id)
    {
    	$vendor_details = VendorDetails::where('id', $id)->first();
    	$user_id = $vendor_details->user_id;
    	$vendor_info = User::where('id', $user_id)->get();
    	return view('vendors.view_vendor_details', compact('vendor_details', 'vendor_info'));
    }
}
