<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="CV.css">
    <link rel="shortcut icon" href="img/cv.png">
	<title>CV</title>
</head>
<body data-spy="scroll" data-target=".navbar">
	<div id="Header">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
			<div class="container">
				<button class = "navbar-toggler" data-toggle="collapse" data-target="#Navbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="#" class="navbar-brand"><h3>Resume</h3></a>
				<div class="collapse navbar-collapse" id="Navbar">
				<ul class="mr-auto navbar-nav">
					<li class="nav-item"><a  href="{{route('index')}}" class="nav-link" >About Me</a></li>
					<li class="nav-item"><a  href="{{route('skills')}}" class="nav-link" >Skills</a></li>
					<li class="nav-item"><a  href="{{route('Experience')}}"  class="nav-link">Experience</a></li>
					<li class="nav-item" ><a href ="{{route('contact')}}" class ="nav-link" >Contact</a></li>
				</ul>
				</div>

				
			</div>
		</nav>
	</div>

	<br>
	<br>
	<br>

	<div id="Skills" class="mt-5">
		<div class="container">
			<span class="bg-primary text-white">My skills</span><hr class="bg-primary">
			<div class="row">
				<div class="col">
					<div class="card bg-white">
						<h3 class="ml-3 my-3">Java Programing</h3>
						<div class="progress mx-3">
						<div class=" progress-bar bg-dark" style="width:90%">90%</div>	
						</div>


						<h3 class="ml-3 my-3">Python</h3>
						<div class="progress mx-3">
						<div class=" progress-bar bg-dark" style="width:95%">95%</div>	
						</div>


						<h3 class="ml-3 my-3">SQL Server</h3>
						<div class="progress mx-3">
						<div class=" progress-bar bg-dark" style="width:85%">85%</div>	
						</div>

						<h3 class="ml-3 my-3">HTML5</h3>
						<div class="progress mx-3">
						<div class=" progress-bar bg-dark" style="width:100%">100%</div>	
						</div>

						<h3 class="ml-3 my-3">CSS3</h3>
						<div class="progress mx-3">
						<div class=" progress-bar bg-dark" style="width:90%">90%</div>	
						</div>

						<h3 class="ml-3 my-3">Premiere Pro</h3>
						<div class="progress mx-3">
						<div class=" progress-bar bg-dark" style="width:90%">90%</div>	
						</div>





					</div>
					
				</div>
				
			</div>
		</div>
	</div>

</body>
</html>