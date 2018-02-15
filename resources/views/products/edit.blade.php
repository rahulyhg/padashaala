@extends('layouts.app')

@section('content')
<section>
	<form action="{{ route('products.update') }}" method="post" enctype="multipart/form-data" id="updateProducts">
		<input type="hidden" name="id" value="{{ $products->id }}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="product_name">Product Name</label>
					<input type="text" name="product_name" id="" class="form-control" value="{{ $products->product_name }}">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="product_price">Product Price</label>
					<input type="text" name="product_price" id="" class="form-control" value="{{ $products->product_price }}">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="discount_percentage">Product Discount %</label>
					<input type="text" name="discount_percentage" id="" class="form-control" value="{{ $products->discount_percentage }}">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="product_title">Product Title</label>
					<input type="text" name="product_title" id="" class="form-control" value="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="product_description">Description</label>
					<textarea name="product_description" rows="5" class="form-control" value=""></textarea>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="meta_description">Meta Description</label>
					<textarea name="meta_description" rows="5" class="form-control" value=""></textarea>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="meta_keyword">Meta Keyword</label>
					<input type="text" name="meta_keyword" id="" class="form-control" value="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="image">Product Image</label>
					<input type="file" name="image" id="" class="form-control" value="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="main_image">Main Image</label>
					<input type="file" name="main_image" id="" class="form-control" value="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="feature">Product Feature</label>
					<input type="text" name="feature" id="" class="form-control" value="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="question">Question</label>
					<input type="text" name="question" id="" class="form-control" value="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="answer">Answer</label>
					<input type="text" name="answer" id="" class="form-control" value="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="Key">Product Key</label>
					<input type="text" name="key" id="" class="form-control" value="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="value">Product Value</label>
					<input type="text" name="value" id="" class="form-control" value="">
				</div>
			</div>
			<button type="submit" name="submit" class="btn btn-primary btn-xs text-center">Update Product</button>
			<div class="clearfix"></div>
		</div>
	</form>
</section>
@endsection