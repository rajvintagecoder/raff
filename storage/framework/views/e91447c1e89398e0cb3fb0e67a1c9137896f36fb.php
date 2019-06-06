<?php $__env->startSection('content'); ?>

<section id="white" class="padding">
	<div class="container">
		<div class="row about-page">
        <div class="title text-center"><h2><?php echo e($title); ?></h2></div>
			<div class="col-md-7 about-info">
				<h2>Welcome to Rafflrs</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="col-md-5">
                <video controls="" autoplay="" name="media" style="background-color: transparent;"><source src="http://hoshiarpurcyclingclub.in/kv1/wp-content/uploads/2018/05/V2_Rafflr_FINAL_SYNCED.mp4" type="video/mp4"></video>
			</div>
			<div class="col-md-12 raffrs-team">
				<div class="about-info">
					<h2 class="mar-btm-about">The Rafflrs Team</h2>
					<div class="founder margin-btm-founder">
						<div class="founder-image"><img style="width: 150px;" src="<?php echo e(asset('images/u1.jpg')); ?>"></div>
						<div class="founder-text">
							<h2>Ehsun Tafsiri | Co-Founder</h2>
							<p class="icon-quot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ullamcorper sem at dui pretium sodales. Nunc dapibus, nisl iaculis venenatis vulputate, neque nulla tempor ante, non porttitor sem arcu vel risus. Sed interdum ornare nunc ac accumsan. Quisque consequat urna vitae quam pretium, vitae eleifend urna convallis. Sed interdum ornare nunc ac accumsan. Quisque consequat urna vitae quam pretium, vitae eleifend urna convallis.</p>
						</div>
					</div>
					<div class="founder">
						<div class="founder-image"><img style="width: 150px;" src="<?php echo e(asset('images/u2.jpg')); ?>"></div>
						<div class="founder-text">
							<h2>Michel Lieben | Co-Founder</h2>
							<p class="icon-quot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ullamcorper sem at dui pretium sodales. Nunc dapibus, nisl iaculis venenatis vulputate, neque nulla tempor ante, non porttitor sem arcu vel risus. Sed interdum ornare nunc ac accumsan. Quisque consequat urna vitae quam pretium, vitae eleifend urna convallis. Sed interdum ornare nunc ac accumsan. Quisque consequat urna vitae quam pretium, vitae eleifend urna convallis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/raaj/raffles/resources/views/pages/about.blade.php ENDPATH**/ ?>