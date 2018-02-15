<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product add</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
	 <input type="hidden" name="id" value="{{$id}}">
		{{ csrf_field() }}
		<label for="product_name">Frist Name:</label><br>
		<input type="text" name="first_name" value=""><br>

		<label for="product_price">Last Name:</label><br>
		<input type="text" name="last_name" value=" {{$id}}"><br>

		<label for="discount_percentage">Phone:</label>
		<input type="text" name="phone" value=""><br>

		<label for="question">Provider:</label><br>
		<input type="text" name="provider" value=""><br>

		<label for="answer">provider_id:</label>
		<input type="text" name="provider_id" value=""><br>

		<label for="title">token:</label><br>
		<input type="text" name="token" value=""><br>

		<label for="description">email:</label>
		<input type="text" name="email" value=""><br>

		<label for="feature">password:</label>
		<input type="text" name="password" value=""><br>

		<label for="meta_keyword">status:</label><br>
		<input type="text" name="status" value=""><br>

		<label for="meta_description">Seo Description:</label>
		<input type="text" name="meta_description" value=""><br>

		<label for="image">verified</label><br>
		<input type="text" name="verified" value=""><br>

		<label for="main_image">gender:</label>
		<input type="text" name="gender" value=""><br>

		<label for="key">Key:</label><br>
		<input type="text" name="key" value=""><br>

		<label for="value">DOB:</label>
		<input type="date" name="DOB" value=""><br>

		<input type="img" src=""  name="Updated">>
	</form>
</body>
</html>