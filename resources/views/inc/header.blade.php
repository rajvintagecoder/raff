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
				<a class="nav-link" href="{{route('liveraffles')}}">Live Raffles</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="{{route('pastwinners')}}">Past Winners</a>
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
		  <a class="nav-link" href="{{route('faqs')}}">FAQs</a>
		  </li>
			   @guest
                            <li class="nav-item green-btn">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item green-btn">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
		  <li class="social-icon"><a href=""><i class="fa fa-instagram"></i></a></li>	
		  <li class="social-icon"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		  <li class="social-icon"><a href=""><i class="fa fa-twitter"></i></a></li>		  	  
		</ul>
	  </div>  
	</nav>
</header>

