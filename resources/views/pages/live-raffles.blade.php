@extends('layouts.app')

@section('content')

<section id="white" class="padding no_height">
	<div class="container">
		<div class="title text-center"><h2 style="margin:0px;">Live Raffles</h2></div>
	</div>
</section>
<section id="grey" class="padding">
	<div class="container">
		<div class="row">
			@foreach ($raffles as $raffle)
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
					<a href="/products/{{$raffle->id}}"><img src="storage/product_images/{{$raffle->product_image}}"></a>
						<div class="prize">
						<span>£{{$raffle->price * $raffle->quantity}}</span>
						</div>
						<div class="box_content text-center">
						<h4>{{$raffle->product_name}}</h4>
						<?php
							$width = ($raffle->sold/$raffle->quantity)*100;
						?>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?=round($width)?>%">	

							  </div>
							</div>
						<p class="ticketquantity"> {{$raffle->sold}} / {{$raffle->quantity}} tickets left </p>
						</div>
					</div>
				</div>
			</div>
				
			@endforeach
			
		</div>
	</div>
</section>

<section id="lightgrey" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title font-24 text-left"><h2>Ending Soon</h2></div>
			@foreach ($endingSoon as $soon)
				
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
					<a href="/products/{{$soon->id}}"><img src="storage/product_images/{{$soon->product_image}}"></a>
						<div class="prize">
						<span>£{{$soon->price * $soon->quantity}}</span>
						</div>
						<div class="box_content text-center">
						<h4>{{$soon->product_name}}</h4>
						<?php
							$width = ($soon->sold/$soon->quantity)*100;
						?>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?=round($width)?>%">	

							  </div>
							</div>
						<p class="ticketquantity"> {{$soon->sold}} / {{$soon->quantity}} tickets left </p>
						</div>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</section>
<section id="white" class="padding no_height">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title font-24 text-left"><h2>All Raffles</h2></div>
				@foreach ($allRaffles as $af)
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="progess_box">
					<div class="box_img">
					<a href="/products/{{$af->id}}"><img src="storage/product_images/{{$af->product_image}}"></a>
					@if ($af->status == 0)
							<div class="prize sold_out"><span>Sold Out</span></div>
					@else
						<div class="prize"><span>£{{$af->price * $af->quantity}}</span></div>
					@endif
				
					

						<div class="box_content text-center">
						<h4>{{$af->product_name}}</h4>
						<?php
							$width = ($af->sold/$af->quantity)*100;
						?>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?=round($width)?>%">	

							  </div>
							</div>
						<p class="ticketquantity"> {{$af->sold}} / {{$af->quantity}} tickets left </p>
						</div>
					</div>
				</div>
				</div>
				@endforeach
			</div>
			
	</div>
</section>
			
@endsection