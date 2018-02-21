<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\BrandRepository;
use Kurt\Repoist\Repositories\Eloquent\Criteria\Completed;
use App\Model\Brand;
use Yajra\DataTables\DataTables;

class BrandController extends Controller
{

    private $brandRepository;

    function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('brand.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
       $this->brandRepository->store($request->all());
    }

    public function delete($id)
    {
        $this->brandRepository->deleteBrand($id);
    }

    public function getBrandsJson()
    {
        $brands = $this->brandRepository->all();  
        foreach ($brands as $brand) {
                  $image = null !== $brand->getImage()? $brand->getImage()->smallUrl: $brand->getDefaultImage()->smallUrl;
                  $brand->image = $image;
              }      
        return datatables( $brands )->toJson();
    }

    public function editBrand($id)
    {
        // $brands = $this->brandRepository->update($id);
        $brands = $this->brandRepository->find($id);
        return view('brand.edit', compact('brands'));
    }

    public function updateBrand(BrandRequest $request)
    {
        $this->brandRepository->updateBrand($request->id, $request->all());
    }
}
