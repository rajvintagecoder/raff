<header>
	<nav class="navbar navbar-expand-md  navbar-dark fixed-top">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="nav navbar-nav ml-auto">
		  <li class="nav-item dropdown_menu">
			<a class="nav-link" href="#">Raffles</a>
			<ul class="sub-menu">
				<li class="nav-item">
				<a class="nav-link" href="<?php echo e(route('liveraffles')); ?>">Live Raffles</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo e(route('pastwinners')); ?>">Past Winners</a>
				</li>
			</ul> 
		  </li>
		  <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('about')); ?>">About us</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">How to enter</a>
		  </li> 
		  <li class="nav-item">
		  <a class="nav-link" href="<?php echo e(route('faqs')); ?>">FAQs</a>
		  </li>
			   <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item green-btn">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item green-btn">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
		  <li class="social-icon"><a href=""><i class="fa fa-instagram"></i></a></li>	
		  <li class="social-icon"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		  <li class="social-icon"><a href=""><i class="fa fa-twitter"></i></a></li>		  	  
		</ul>
	  </div>  
	</nav>
</header>

<?php /**PATH /home/raaj/raffles/resources/views/inc/header.blade.php ENDPATH**/ ?>