@extends('layouts.app')
@section('content')

    <section id="white" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="progess_box">
					<div class="box_img">
						<img src="../storage/product_images/{{$product->product_image}}">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="single-right-side">
					<div class="title"><h2>{{$product->product_name}}</h2></div>
                <h4>Ticket Price: <span class="green">£{{$product->price}}</span></h4>
                <h4>Total Tickets: {{$product->quantity}}</h4>
               
                @php
                $endDate = strtotime($product->end_date);
                    $y = date('Y',$endDate);
                    $m = date('m',$endDate);
                    $d = date('d',$endDate);
                    $hh = date('h',$endDate);
                    $mm = date('i',$endDate);
                    $ss = date('s',$endDate);
				@endphp
				@if ($product->status == '0')
					<h4>Raffle Closed</h4>
				@else
                <h4>Raffle closes in: <span class="green" id="days"></span>d <span class="green" id="hours"></span>h <span class="green" id="minutes"></span>m <span class="green" id="seconds"></span>s</h4>
				@endif
                
                <div class="progess_box">
						<div class="progress_ticket-info">
								<span class="green" style="float:left;">{{$product->sold}} Sold</span><span style="color:#191919;float:right">{{$product->quantity - $product->sold}} Left</span>
                        </div>
                        <?php	$width = ($product->sold/$product->quantity)*100;?>
						<div class="progress">							
							<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
								 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?=$width?>%">				
							</div>
						</div>
					</div>
					<form action="{{ route('cart.store') }}" method="post">
						@csrf
					<input type="hidden" name="productid" value="{{$product->id}}">
					@if (Auth::check())
					<input type="hidden" name="userid" value="{{Auth::user()->id}}">	
					@else
					<input type="hidden" name="userid" value="0">	
					@endif	
					<input type="hidden" name="price" value={{$product->price}}>
					<input type="hidden" name="totalQuantity" value="{{$product->quantity}}">
					<input type="hidden" name="productName" value={{$product->product_name}}>
					<div class="input-group quantity">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" id="left-minus">
                               <i class="fa fa-minus"></i>
                            </button>
                        </span>
                        <input type="text" value="1" id="quantity" name="quantity" class="form-control input-number"  min="1" maxlength="2">
                        <input type="text" value="Ticket" class="form-control input-number" id="ticket" disabled>
                        <span class="input-group-btn">
                            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" id="right-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </span>
					</div>
						<div class="progress_ticket-info">
                   			 <span style="color:#191919;float:right;margin-top:8px;"><a href="{{route('faqs')}}">Free entry method</a></span>
						</div>
						@if ($product->status == 0)
						<button type="submit" value="Submit" class="cartBtn" disabled>Enter Now</button>	
						@else
						<button type="submit" value="Submit" class="cartBtn">Enter Now</button>
						@endif

					</form>
					
					
				</div>
			</div>
		</div>
	</div>
</section>
<section id="desc" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="title"><h2>Description: </h2></div>
			</div>
			<div class="col-md-10">
				<p style="margin-top:5px; margin-left:20px;">{{$product->description}}</p>
			</div>
		</div>
	</div>
</section>
@if ($product->status == '1')
<script>
var year = <?=$y?>;
var month = <?=$m?>;
var day = <?=$d?>;
var hh = <?=$hh?>;
var mm = <?=$mm?>;
var ss = <?=$ss?>;
//console.log(year,month,day , hh,mm,ss);
var count = new Date(year+','+month+','+day+' '+hh+':'+mm+':'+ss).getTime();
var a = setInterval(function (){
		var now = new Date().getTime();
		var b = count - now;

		var days = Math.floor(b/(1000*60*60*24));
		var hours = Math.floor(b%(1000*60*60*24)/(1000*60*60));
		var minutes = Math.floor(b%(1000*60*60)/(1000*60));
		var seconds = Math.floor(b%(1000*60)/1000);

		document.getElementById('days').innerHTML = days;
		document.getElementById('hours').innerHTML = hours;
		document.getElementById('minutes').innerHTML = minutes;
		document.getElementById('seconds').innerHTML = seconds;

		if (b <=0) {
			clearInterval(a);
		}
	},1000);
</script>
@endif
@endsection