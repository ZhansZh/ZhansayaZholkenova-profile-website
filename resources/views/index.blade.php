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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="CV.css">
    <link rel="shortcut icon" href="img/cv.png">
	<title>CV</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
	

	<div id="bg-img"></div>

	<div id="About">
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="AboutData">
						<div class="card bg-white">
							<div class ="card-title my-5">
								<div class="media">
									 
							 <img src="{{asset('img/girl2.jpg')}}" width= "250" height="250" class="img-fluid rounded-top mx-5 d-none d-lg-block" >
										<div class="media-body"> 
											<h3 class="display-4 ml-5">{{__('Im Zholkenova Zhansaya')}}</h3> 
											<p class="text-muted ml-5">{{__('Programmer & Tutor')}}</p> 
											<div class="container">
												<table class ="table table-responsive ml-5">
													<tr>
														<td class="text-muted">{{__('Age')}}</td>
														<td>{{__(':')}}</td>
														<td></td>
														<td>{{__('19 years old')}}</td>
													</tr>

													<tr>
														<td class="text-muted">{{__('Email:')}}</td>
														<td>{{__(':')}}</td>
														<td></td>
														<td>{{__('190103046@stu.sdu.edu.kz')}}</td>
													</tr>

													<tr>
														<td class="text-muted">{{__('Education')}}</td>
														<td>{{__(':')}}</td>
														<td></td>
														<td>{{__('Suleyman Demirel University')}}</td>
													</tr>

													<tr>
														<td class="text-muted">{{__('Phone')}}</td>
														<td>{{__(':')}}</td>
														<td></td>
														<td>{{__('+7074645407')}}</td>
														<td></td>
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
						<span class="bg-success text-white"> {{ __('Bio')}}</span> <hr class="bg-success">
						<p class="lead text-justify"> {{__('A second year student of Informational Systems at SDU.FLEX program finalist. Reliable and dedicated young professional with a practical hands-on approach, who always preserves to achieve the best results. I have an excellent comunication and problen solving skills and a proven ability to manage and complete projects to the highest standard. ')}} </p>
						
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