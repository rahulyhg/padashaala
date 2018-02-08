<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product add</title>
</head>
<body>
	<form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label for="product_name">Frist Name:</label><br>
		<input type="text" name="first_name"><br>

		<label for="product_price">Last Name:</label><br>
		<input type="text" name="last_name"><br>

		<label for="discount_percentage">Phone:</label>
		<input type="text" name="phone"><br>

		<label for="question">Provider:</label><br>
		<input type="text" name="provider"><br>

		<label for="answer">provider_id:</label>
		<input type="text" name="provider_id"><br>

		<label for="title">token:</label><br>
		<input type="text" name="token"><br>

		<label for="description">email:</label>
		<input type="text" name="email"><br>

		<label for="feature">password:</label>
		<input type="text" name="password"><br>

		<label for="meta_keyword">status:</label><br>
		<input type="text" name="status"><br>

		<label for="meta_description">Seo Description:</label>
		<input type="text" name="meta_description"><br>

		<label for="image">verified</label><br>
		<input type="text" name="verified"><br>

		<label for="main_image">gender:</label>
		<input type="text" name="gender"><br>

		<label for="key">Key:</label><br>
		<input type="text" name="key"><br>

		<label for="value">DOB:</label>
		<input type="date" name="DOB"><br>

		<input type="submit" value="submit" name="submit">

	</form>
</body>
</html>