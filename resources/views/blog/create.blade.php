<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>Create new blog</title>
</head>
<body>
		<form method="POST" action = "{{  route('add-post') }}">
			@csrf
			<input type="text" name="title" placeholder="title">
			<input type="text" name="body" placeholder="body">
			<button type="submit">Create</button>
		</form>

</body>
</html>