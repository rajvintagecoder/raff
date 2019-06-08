@extends('layouts.app')
@section('content')
    <section id="white" class="padding">
	<div class="container">
    <div class="title text-center"><h2>{{$title}}</h2></div>
		<div class="title font-24 arrow-mar text-center"><h2 class="green">May 2019</h2></div>
		<div class="row recent_winner_slider past_winner">			
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
@endsection