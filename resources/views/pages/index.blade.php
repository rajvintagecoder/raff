@extends('layouts.app')
@section('content')

<section class="banner text-center">
	<div class="container">
		<h1>Rafflrs</h1>
		<h3> Win your dream <a href="" class="typewrite" data-period="2000" data-type='[ "car", "holiday", "gadget"]'>
		<span class="wrap"></span>
		</a></h3>
	<div class="site_green_btn"><a href="{{route('viewall')}}"> View live raffles</a></div>
	</div>
</section>
<section class="greenbar">
    <div class="container">
		<div class="col-xs-12">
            <div class="green_p text-center">
                <p><a href="#green">SIGN UP</a> to our newsletter to hear about new raffles and upcoming promotions.</p>               
            </div>
        </div>           
    </div>
</section>


<section id="grey" class="padding">
	<div class="container">
		<div class="row">
			<div class="title text-center"><h2>Featured Raffles</h2></div>
			@foreach ($products as $product)
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
					<a href="/products/{{$product->id}}"><img src="storage/product_images/{{$product->product_image}}"></a>
						<div class="prize">
						<span>£{{$product->price * $product->quantity}}</span>
						</div>
						<div class="box_content text-center">
						<h4>{{$product->product_name}}</h4>
						<?php
							$width = ($product->sold/$product->quantity)*100;
						?>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?=round($width)?>%">	

							  </div>
							</div>
						<p class="ticketquantity"> {{$product->sold}} / {{$product->quantity}} tickets left </p>
						</div>
					</div>
				</div>
			</div>
				
			@endforeach
			
		</div>
	</div>
</section>
<section id="white" class="padding">
	<div class="container">
		<div class="row">
			<div class="title text-center"><h2>Ending Soon</h2></div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
						<a href="#"><img src="{{asset('images/img5.jpg')}}"></a>
						<div class="box_content text-center">
							<h4>Rafflrs 1</h4>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width:4%">					
							  </div>
							</div>
							<p class="ticketquantity"> 48 / 50 tickets left </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
						<a href="#"><img src="{{asset('images/img6.jpg')}}"></a>
						<div class="box_content text-center">
							<h4>Rafflrs 2</h4>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width:15%">					
							  </div>
							</div>
							<p class="ticketquantity"> 85 / 100 tickets left </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
						<a href="#"><img src="{{asset('images/img7.jpg')}}"></a>
						<div class="box_content text-center">
							<h4>Rafflrs 3</h4>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">					
							  </div>
							</div>
							<p class="ticketquantity"> 70 / 100 tickets left </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
						<a href="#"><img src="{{asset('images/img8.jpg')}}"></a>
						<div class="box_content text-center">
							<h4>Rafflrs 4</h4>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">					
							  </div>
							</div>
							<p class="ticketquantity"> 40 / 50 tickets left </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="grey" class="padding">
	<div class="container">
		<div class="title text-center"><h2>Recent Winners</h2></div>
		<div class="row recent_winner_slider">			
			<div class="item">
				<div class="box_img">
					<a href="#"><img src="{{asset('images/img9.jpg')}}"></a>
					<div class="box_content text-center">
						<h4>Rafflrs 5</h4>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="box_img">
					<a href="#"><img src="{{asset('images/img10.jpg')}}"></a>
					<div class="box_content text-center">
						<h4>Rafflrs 7</h4>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="box_img">
					<a href="#"><img src="{{asset('images/img1.jpg')}}"></a>
					<div class="box_content text-center">
						<h4>Rafflrs 3</h4>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="box_img">
					<a href="#"><img src="{{asset('images/img11.jpg')}}"></a>
					<div class="box_content text-center">
						<h4>Rafflrs 2</h4>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="box_img">
					<a href="#"><img src="{{asset('images/img2.jpg')}}"></a>
					<div class="box_content text-center">
						<h4>Rafflrs 1</h4>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="box_img">
					<a href="#"><img src="{{asset('images/img5.jpg')}}"></a>
					<div class="box_content text-center">
						<h4>Rafflrs 4</h4>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>	
<section id="black" class="padding">
	<div class="container">
		<div class="row">
			<div class="title text-center"><h2>How to enter</h2></div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="circle text-center">
					<div class="num">1</div>
					<h4>Register</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="circle text-center">
					<div class="num">2</div>
					<h4>Find a prize you would<br> love to win!</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="circle text-center">
					<div class="num">3</div>
					<h4>Buy tickets to the raffle or<br> enter via our <a href="">free entry<br> route</a></h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="circle last text-center">
					<div class="num">4</div>
					<h4>You can be the<br> lucky winner!</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="green" class="padding">
	<div class="container">
		<div class="row text-center">
			<div class="title "><h2>Join our newsletter</h2></div>
			<div class="newsletter">
				<input type="text" placeholder="Your email address">
				<div class="green_text"><a href="">Join Us</a></div>
			</div>
		</div>
	</div>
</section>

@endsection


