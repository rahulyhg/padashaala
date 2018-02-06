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
        $brandProducts = $this->brandRepository->all();
        return view('brand.index', compact('brandProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
       $this->brandRepository->create($request->all());

       // $brand = new Brand;

       //  $image = $request->file('image');
       //  $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       //  $destinationPath = public_path('/uploads');
       //  $image->move($destinationPath, $input['imagename']);


        // $this->image->add($input);

        // $brand->image = $input;
        // $brand->save();

        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = $this->brandRepository->findById($id);
        return view('brand.index', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->brandRepository->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->brandRepository->delete($id);
        return redirect()->back()->with(['success', 'Brand has successfully deleted!']);
    }

    public function getBrandsJson(Request $request)
    {
        
        $brands = Brand::all();
        
        
        return datatables( $brands )->toJson();
    }
}
