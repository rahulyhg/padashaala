<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Product</title>
</head>
<body>
	<h1>Add Category</h1>
	<form action="{{ route('category.store') }}" method="post">
		{{ csrf_field() }}
		<label for="name">Category Name:</label><br><br>
		<input type="text" name="name"><br><br>
		<label for="description">Category Description:</label><br><br>
		<textarea name="description" cols="30" rows="10" placeholder="About this category"></textarea><br><br>
		<label for="parent_id">Select Parent Catgory:</label><br><br>
		<select name="parent_id">
			<option value="0">Select Main Category</option>
			@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
				@include('category.dropdown')
			@endforeach
		</select>
		<button type="submit" name="submit">Add</button>
	</form>
</body>
</html>