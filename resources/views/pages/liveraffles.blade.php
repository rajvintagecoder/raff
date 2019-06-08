@extends('layouts.app')

@section('content')
    <section id="white" class="padding">
	<div class="container">
    <div class="title text-center"><h2 style="margin:0px;">{{$title}}</h2></div>
	</div>
</section>	
<section id="grey" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title font-24 text-left"><h2>Featured Raffles</h2></div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
						<a href="#"><img src="{{asset('images/img1.jpg')}}"></a>
						<div class="prize">
							<span>£50</span>
						</div>
						<div class="box_content text-center">
							<h4>Rafflrs 1</h4>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">					
							  </div>
							</div>
							<p class="ticketquantity"> 20 / 50 tickets left </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
						<a href="#"><img src="{{asset('images/img2.jpg')}}"></a>
						<div class="prize">
							<span>£75</span>
						</div>
						<div class="box_content text-center">
							<h4>Rafflrs 2</h4>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">					
							  </div>
							</div>
							<p class="ticketquantity"> 20 / 100 tickets left </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
						<a href="#"><img src="{{asset('images/img3.jpg')}}"></a>
						<div class="prize sold_out">
							<span>Sold Out</span>
						</div>
						<div class="box_content text-center">
							<h4>Rafflrs 3</h4>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">					
							  </div>
							</div>
							<p class="ticketquantity"> 0 / 50 tickets left </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
						<a href="#"><img src="{{asset('images/img4.jpg')}}"></a>
						<div class="prize">
							<span>£55</span>
						</div>
						<div class="box_content text-center">
							<h4>Rafflrs 4</h4>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">					
							  </div>
							</div>
							<p class="ticketquantity"> 30 / 50 tickets left </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="lightgrey" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title font-24 text-left"><h2>Ending Soon</h2></div>
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
						<a href="#"><img src="{{asset('images/img3.jpg')}}"></a>
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
<section id="white" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title font-24 text-left"><h2>All Raffles</h2></div>
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
		<div class="row mar-top-btm">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="progess_box">
					<div class="box_img">
						<a href="#"><img src="{{asset('images/img6.jpg')}}"></a>
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
						<a href="#"><img src="{{asset('images/img11.jpg')}}"></a>
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
						<a href="#"><img src="{{asset('images/img2.jpg')}}"></a>
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
						<a href="#"><img src="{{asset('images/img9.jpg')}}"></a>
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
		<div class="row">
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
						<a href="#"><img src="{{asset('images/img3.jpg')}}"></a>
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
						<a href="#"><img src="{{asset('images/img1.jpg')}}"></a>
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
						<a href="#"><img src="{{asset('images/img2.jpg')}}"></a>
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
@endsection