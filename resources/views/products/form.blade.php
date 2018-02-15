<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<section>
	<form action="{{Route('products.store')}}" method="post" enctype="multipart/form-data" id="products">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="product_name">Product Name</label>
					<input type="text" name="product_name" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="product_price">Product Price</label>
					<input type="text" name="product_price" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="discount_percentage">Product Discount %</label>
					<input type="text" name="discount_percentage" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="product_title">Product Title</label>
					<input type="text" name="product_title" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="product_description">Description</label>
					<textarea name="product_description" rows="5" class="form-control"></textarea>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="meta_description">Meta Description</label>
					<textarea name="meta_description" rows="5" class="form-control"></textarea>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="meta_keyword">Meta Keyword</label>
					<input type="text" name="meta_keyword" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="image">Product Image</label>
					<input type="file" name="image" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="main_image">Main Image</label>
					<input type="file" name="main_image" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="feature">Product Feature</label>
					<input type="text" name="feature" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="question">Question</label>
					<input type="text" name="question" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="answer">Answer</label>
					<input type="text" name="answer" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="Key">Product Key</label>
					<input type="text" name="key" id="" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="value">Product Value</label>
					<input type="text" name="value" id="" class="form-control">
				</div>
			</div>
			<button type="submit" name="submit" id="submit" class="btn btn-primary btn-xs text-center btn-products-add">Add Product</button>
			<div class="clearfix"></div>
		</div>
	</form>
</section>