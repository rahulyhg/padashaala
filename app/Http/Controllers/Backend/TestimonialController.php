<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Repositories\Contracts\TestimonialRepository;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
	private $testimonial;

	public function __construct(TestimonialRepository $testimonial)
	{
		$this->testimonial = $testimonial;
	}

    public function index()
    {
    	return view('testimonials.index');
    }

    public function create()
    {
    	return view('testimonials.create');
    }

    public function store(TestimonialRequest $request)
    {
    	$this->testimonial->store($request->all());
    	return redirect()->back();
    }

    public function getTestimonialsJson()
    {
    	$testimonials = $this->testimonial->all();
        foreach ($testimonials as $testimonial) {
                  $image = null !== $testimonial->getImage()? $testimonial->getImage()->smallUrl: $testimonial->getDefaultImage()->smallUrl;
                  $testimonial->image = $image;
              }
    	return datatables($testimonials)->toJson();
    }

    public function edit($id)
    {
    	$testimonials = $this->testimonial->find($id);
    	return view('testimonials.edit', compact('testimonials'));
    }

    public function update($id, TestimonialRequest $request)
    {
    	$this->testimonial->updateTestimonial($id, $request->all());
    	return redirect()->back();
    }

    public function delete($id)
    {
        $this->testimonial->deleteTestimonial($id);
        return redirect()->back();
    }
}
