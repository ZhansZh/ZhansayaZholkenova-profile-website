<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="CV.css">
    <link rel="shortcut icon" href="img/cv.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
	<title>CV</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<style type="text/css" media="screen">

body{
	background-color: #CCC;

}
html,body{
    overflow-x: hidden;
    margin: 0;
    padding: 0;

}

#Header a:hover{
	color: #FFF;
}

#bg-img{
	background:  url('img/final.jpg');
	background-size: 100%;
	background-repeat:no-repeat;
	min-height: 500px;
}

#About{
	margin-top:-200px;
}

#About .fa{
	color: #FFF;
}
#About span{
	padding: 10px 20px 10px 20px;
}
#About hr{
	border-width:2px;
	margin-top: 06px;
}

#Skills span{
	padding: 10px 20px 10px 20px;
}

#Skills hr{
	border-width:2px;
	margin-top: 06px;
}

#Experience span{
	padding: 10px 20px 10px 20px;
}

#Experience hr{
	border-width:2px;
	margin-top: 06px;
}

#Experience .card{
	border-top:03px solid #d63031;
}

#Contact span{
	padding: 10px 20px 10px 20px;
}

#Contact hr{
	border-width:2px;
	margin-top: 06px;

}

.card-img-top {
    width: 100%;
    height: 50vh;
    object-fit: cover;
}

.embed-responsive .card-img-top {
    object-fit: cover;
}




</style>

</head>
<body data-spy="scroll" data-target=".navbar">
	<div id="Header">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
			<div class="container">
				<button class = "navbar-toggler" data-toggle="collapse" data-target="#Navbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="#" class="navbar-brand"><h3>{{__('Resume')}}</h3></a>
				<div class="collapse navbar-collapse" id="Navbar">
				<ul class="mr-auto navbar-nav" id ="navbarToggle">
					<li class="nav-item"><a  href="{{route('index')}}" class="nav-link" >{{__('About Me') }}</a></li>
					<li class="nav-item"><a  href="{{route('skills')}}" class="nav-link" >{{__('Skills')}}</a></li>
					<li class="nav-item"><a  href="{{route('Experience')}}"  class="nav-link">{{__('Experience')}}</a></li>
					<li class="nav-item" ><a href ="{{route('contact')}}" class ="nav-link" >{{__('Contact')}}</a></li>
					@php $locale = session()->get('locale'); @endphp
					<li class="nav-item dropdown">
						 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     @switch($locale)
                        @case('en')
                                <img src="{{asset('img/us.png')}}"> {{__('English') }}
                               @break
                          @case('ru')
                                <img  src="{{asset('img/ru.png')}}"> {{__('Russian') }}
                                @break
                          @case('kz')
                                <img src="{{asset('img/kz2.png')}}"> {{__('Kazakh') }}
                                @break
                         @default
                                <img src="{{asset('img/us.png')}}"> English
                            @endswitch

						<span class="caret"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/en"><img src="{{asset('img/us.png')}}"> English</a>
                            <a class="dropdown-item" href="/ru"><img src="{{asset('img/ru.png')}}"> Russian</a>
                            <a class="dropdown-item" href="/kz"><img src="{{asset('img/kz2.png')}}"> Kazakh</a>

                        </div>
					</li>
				</ul>
				</div>
			</div>
		</nav>
 <main class="py-4">
        @yield('content')
    </main>

	</div>
	



	<br>
	<br>
	<br>
	
	<div id="Contact">
					<div class="container mt-5">
						<span class="bg-dark text-white">Contact me</span> <hr class="bg-dark">
						<div class="row">
							<div class="col">
								<div class="card bg-white">
									<div class="card-header">
										<h4 class="my-4">Contact Me</h4>
									<form action="/question" method="POST" enctype="multipart/form-data">
										<div class="form-group ">
											<label for="Name">Name</label>
											<input type="text" placeholder="Name" id="name" name = "name" class="form-control " required>	
										</div>

										<div class="form-group ">
											<label for="Email">Email</label>
											<input type="text" placeholder="Email" id = "email" name ="email" class="form-control " required>	
										</div>

										<div class="form-group ">
											<label for="">Feedback</label>
											<textarea id ="area"  name = "question" class="form-control" placeholder="Feedback....."></textarea>	
										</div>


										<div class = "form-group">
											<label for="Profile Photo">Profile Photo</label>

												<input class="form-control" type="file" name="file" multiple />

												
				
										</div>
										
										<div class="form-group ">
											<button type = "submit" id = "question" onclick="" class="btn btn-success text-white">Submit</button>	
										</div>


								   </div>

								</div>
								
							</div>
							
						</div>
						
					</div>
					</form>
			</div>
			<br>
			<br>
				
		


<script src="CV.js"></script>

</body>
</html>
