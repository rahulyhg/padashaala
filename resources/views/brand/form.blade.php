
	<div class="col-md-4">
		<form action="" enctype="multipart/form-data" id="brandSubmit">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" class="form-control">
			</div>

			<div class="form-group">
				<label for="company_name">Company Name</label>
				<input type="text" name="company_name" class="form-control" value="">
			</div>

			<button type="submit" name="submit" class="btn-add">Add Brand</button>
		</form>
	</div>