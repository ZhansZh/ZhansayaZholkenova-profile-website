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

		<div id="bg-img"></div>

	<div id="About">
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="AboutData">
						<div class="card bg-white">
							<div class ="card-title my-5">
								<div class="media">
							 <img src="img/girl2.jpg" width= "250" height="250" class="img-fluid rounded-top mx-5 d-none d-lg-block">
										<div class="media-body">
											<h3 class="display-4 ml-5">I'm Zholkenova Zhansaya</h3>
											<p class="text-muted ml-5">Programmer & Tutor</p>
											<div class="container">
												<table class ="table table-responsive ml-5">
													<tr>
														<td class="text-muted">Age</td>
														<td>:</td>
														<td>19 Years old</td>
													</tr>

													<tr>
														<td class="text-muted">Email:</td>
														<td>:</td>
														<td>190103046@stu.sdu.edu.kz</td>
													</tr>

													<tr>
														<td class="text-muted">Education:</td>
														<td>:</td>
														<td>Suleyman Demirel University</td>
													</tr>

													<tr>
														<td class="text-muted">Phone:</td>
														<td>:</td>
														<td>+77074645407</td>
													</tr>




												</table>
												
											</div>	
										</div>

								</div>

							</div> 
							<div class = "card-footer bg-dark">
									<a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x mx-3"></i></a>
									<a href="https://twitter.com/twitter"><i class="fa fa-twitter fa-2x mx-3"></i></a>
									<a href="https://github.com/account/unverified-email"><i class="fa fa-github fa-2x mx-3"></i></a>

							</div>
								
						</div>
							
					</div>
						
				</div>
					
			</div>
				
		</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col">
						<span class="bg-success text-white">Bio</span> <hr class="bg-success">
						<p class="lead text-justify"> A second year student of Informational Systems at SDU.FLEX program finalist. Reliable and dedicated young professional with a practical hands-on approach, who always preserves to achieve the best results. I have an excellent comunication and problen solving skills and a proven ability to manage and complete projects to the highest standard. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
						
					</div>
					
				</div>
			</div>

	</div>


	

				<div class="container-fluid bg-dark">
					<div class="row">
						<div class="col">
							<div class="container">
							<p class="text-white py-3">Resume: 2020-2021</p>
						</div>
					</div>
						
				</div>
					
			
	
	

<script src="CV.js"></script>			



</body>
</html>