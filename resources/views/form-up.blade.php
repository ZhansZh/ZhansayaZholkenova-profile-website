<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="text" placeholder="Name" name="Name"><br>
		<input type="text" placeholder="Surname" name="surname"><br>
		<input type="email" placeholder="Email" name="email"><br>
		<input type="file" name="file"><br>
		<button type="submit">Upload File</button>
</form>
</body>
</html>