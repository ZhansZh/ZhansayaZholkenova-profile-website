<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel login</title>
	<style >
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			min-height: 100vh;
			background: #eee;
			display: flex;
			font-family: sans-serif;
		}
		.container{
			margin: auto;
			width: 500px;
			max-width: 90%;
		}
		.container form{
			width:100%;
			height: 100%;
			padding: 20px;
			background: white;
			border-radius: 4px;
			box-shadow: 0 8px 16px rgba(0, 0, 0, .3);
		}
		.container form h1{
			text-align: center;
			margin-bottom: 24px;
			color:#222;

		}

		.container form .form-control{
			width: 100%;
			height: 40px;
			background: white;
			border-radius: 4px;
			border: 1px solid silver;
			margin: 10px 0 18px 0;
			padding: 0 10px;

		}
		.container form .btn{
			margin-left: 50%;
			transform: translateX(-50%);
			width:120px;
			height: 34px;
			border: none;
			outline: none;
			background: #27a327;
			cursor: pointer;
			font-size: 16px;
			text-transform: uppercase;
			color: white;
			border-radius: 4px;
			transition: .3s;
		}

		.container form .btn{
			opacity: .7;
		}

	</style>
</head>
<body>
	<div class="container">
		<form action="upload" method="POST" enctype="multipart/form-data">
		  @csrf
			<h1>Laravel Form</h1>

			<div class = "form-group">
				<label for="Name">Name</label>
				<input type="text" placeholder="Name" name="name" class ="form-control" required>
			</div>
			<div class = "form-group">
				<label for="Surname">Surname</label>
				<input type="text" placeholder="Surname" name="surname" class ="form-control" required>
			</div>
			<div class = "form-group">
				<label for="Email">Email</label>
				<input type="email" placeholder="Email" name="email" class ="form-control" required>
			</div>
			<div class = "form-group">
				<label for="Profile Photo">Profile Photo</label>

				<input class="form-control" type="file" name="photos" multiple />

				<input id="btn" type="submit" class="btn btn-primary" value="Submit" />
				
			</div>






		</form>
	</div>

</body>
</html>