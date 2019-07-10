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
							<p>{{$userDetail[0]->email}}</p>
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
								<li>{{$userDetail[0]->name}}</li>
								<li>{{$userDetail[0]->address_1}}</li>
								<li>{{$userDetail[0]->address_2}}</li>
								<li>{{$userDetail[0]->city}}</li>
								<li>{{$userDetail[0]->zipcode}}</li>
								
							</ul>
						</div>
						<div class="display_inline float-right">
							<div class="site_green_btn "><a style="margin-top:0px;" href="">Change</a></div>
						</div>
					</div>
				</div>
				
			</div>	
			<div class="col-md-4 offset-md-2">
				<div class="border_radius border-black">
					<div class="total-div">
						<?php
							$grandTotal = 0;
							foreach ($cartDetail as $itemCart) { ?>
							<div class="row">
									<div class="col-md-6">{{$itemCart->product_name}} x {{$itemCart->quantity}}</div>
									<div class="col-md-6 text-right">£{{$itemCart->cart_total}}</div>
								</div>
								<br>
							<?php $grandTotal+=$itemCart->cart_total;	} ?>
						
						<hr>
						<div class="row">
							<div class="col-md-6">Total</div>
						<div class="col-md-6 text-right green">£{{$grandTotal}}</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
			<div class="border_radius mar-top">
					<div class="title"><h4>Payment</h4></div>
					<div class="inner-check payment-form">
					<form role="form" action="{{route('checkout')}}" method="post" class="require-validation" data-cc-on-file="false"data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                    id="checkout-form">
                        @csrf
  
					<input type="hidden" id="grandTotal" value="{{$grandTotal}}">

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
							<input type='text' placeholder="Name on Card" name="name" id="name" value="{{old('name')}}" required>
							    <div class="errors">{{$errors->first('name')}}</div>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
							<input autocomplete='off' class='card-number' name="card_no" id="card-no" size='20' placeholder="Card Number"  type='text' value="{{old('card_no')}}" required>
							   <div class="errors">{{$errors->first('card_no')}}</div>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
							<input autocomplete='off' name="cvv" class='card-cvc' id="cvc" placeholder='CVC ex. 311' size='4' type='text' value="{{old('cvv')}}" required>
								 <div class="errors">{{$errors->first('cvv')}}</div>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
							<input  class='card-expiry-month' placeholder='MM' size='2'type='text' id="expiry-month" name="expiry_month" value="{{old('expiry_month')}}" required>
							   <div class="errors">{{$errors->first('expiry_month')}}</div>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
							<input  class='card-expiry-year' placeholder='YYYY' size='4'type='text' id="expiry-year" name="expiry_year" value="{{old('expiry_year')}}" required>
							    <div class="errors">{{$errors->first('expiry_year')}}</div>
                            </div>
						</div>
						

						<div id="card-errors" role="alert"></div>
                        <div class="row">
								<div class="greenBtnContainer">
										<button class="greenSubmitBtn" type="submit">Pay Now (£{{$grandTotal}})</button>
								</div>
                        </div>
                          
                    </form>						
						
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('scripts')
	 <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	 <script src="{{asset('js/checkout.js')}}"></script>
@endsection
