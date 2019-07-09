@extends('layouts.app')
@section('content')
    <section id="white" class="padding">
	<div class="container">
		<div class="row checkout">
			<div class="col-md-6">
				<div class="border_radius border-black ">
					<div class="title"><h4>Email Address</h4></div>
					<div class="inner-check">
						<div class="display_inline">
							<p>abc@gmail.com</p>
						</div>
						<div class="display_inline float-right">
							<div class="site_green_btn "><a style="margin-top:0px;" href="">Change</a></div>
						</div>
					</div>
				</div>
				<div class="border_radius border-black mar-top">
					<div class="title"><h4>Billing Address</h4></div>
					<div class="inner-check">
						<div class="display_inline">
							<ul>
								<li>abc xyz</li>
								<li>123, Modal Town</li>
								<li>Distt</li>
								<li>State</li>
								<li>145620</li>
								<li>Country</li>
							</ul>
						</div>
						<div class="display_inline float-right">
							<div class="site_green_btn "><a style="margin-top:0px;" href="">Change</a></div>
						</div>
					</div>
				</div>
				<div class="border_radius mar-top">
					<div class="title"><h4>Payment</h4></div>
					<div class="inner-check payment-form">
						<input type="text" placeholder="Name on Card">
						<input style="margin-bottom: 5px;" type="text" placeholder="Card Number">
						<div class="row">
							<div class="col-md-6">
								<label>Expiry Date:</label>						
								<input type="text">			
							</div>
							<div class="col-md-6">
								<label>CVV:</label>						
								<input type="text">			
							</div>
						</div>						
						<div class="site_green_btn text-center"><a style="margin-top:0px;" href="">Pay</a></div>
					</div>					
				</div>
			</div>	
			<div class="col-md-4 offset-md-2">
				<div class="border_radius border-black">
					<div class="total-div">
						<div class="row">
							<div class="col-md-6">Raffle Name x 2</div>
							<div class="col-md-6 text-right">£2</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">Raffle Name x 3</div>
							<div class="col-md-6 text-right">£6</div>
						</div>
						<br>
						<hr>
						<div class="row">
							<div class="col-md-6">Total</div>
							<div class="col-md-6 text-right green">£8</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection