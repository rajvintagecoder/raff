<header>
	<nav class="navbar navbar-expand-md  navbar-dark fixed-top">
    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="nav navbar-nav ml-auto">
		  <li class="nav-item dropdown_menu">
			<a class="nav-link" href="#">Raffles</a>
			<ul class="sub-menu">
				<li class="nav-item">
					<a class="nav-link" href="#">Live Raffles</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Past Winners</a>
				</li>
			</ul> 
		  </li>
		  <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About us</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">How to enter</a>
		  </li> 
		  <li class="nav-item">
			<a class="nav-link" href="#">FAQs</a>
		  </li>
		  <li class="nav-item green-btn">
			<a class="nav-link" href="#">Sign In</a>
		  </li>
		  <li class="nav-item green-btn">
			<a class="nav-link" href="#">Register</a>
		  </li>
		  <li class="social-icon"><a href=""><i class="fa fa-instagram"></i></a></li>	
		  <li class="social-icon"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		  <li class="social-icon"><a href=""><i class="fa fa-twitter"></i></a></li>		  	  
		</ul>
	  </div>  
	</nav>
</header>