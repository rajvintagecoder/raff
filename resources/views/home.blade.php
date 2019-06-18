@extends('layouts.app')

@section('content')
<section id="white" class="padding">
	<div class="container">
		<div class="row">
			@include('inc.user_left_nav')
			<div class="col-md-8">
				<div class="row ">
				 <ul class="nav nav-tabs col-md-12">
					<li class="active"><a class="active" data-toggle="tab" href="#live">live</a></li>
					<li><a data-toggle="tab" href="#past">past</a></li>
				 </ul>
				<div class="tab-content border_radius col-md-12">
					<div id="live" class="tab-pane fade show active ">
						<?php $i =1 ?>
						@foreach ($cartContent as $cart)
							<div class="row">
							<div class="progess_box display_inline col-md-3">
								<img width="150" src="storage/product_images/{{$cart->product_image}}">
							</div>
							<div class="display_inline  col-md-5">
							<h5>{{$cart->product_name}}</h5>
								@php
									 $tickets = unserialize($cart->tickets);
									 foreach ($tickets as $key=>$value) {
										 echo "<p> Ticket Number: <span class='green'>".$value."</span></p>";
									 }

								@endphp
							</div>
					
						<div class="col-md-4">
							<div class="part-right">
								<h5>Raffle closes in:</h5>
								@php
									$endDate = strtotime($cart->end_date);
									$y = date('Y',$endDate);
									$m = date('m',$endDate);
									$d = date('d',$endDate);
									$hh = date('h',$endDate);
									$mm = date('i',$endDate);
									$ss = date('s',$endDate);
             				   @endphp
								<p><span class="green" id="days<?=$i?>"></span>d <span class="green" id="hours<?=$i?>"></span>h <span class="green" id="minutes<?=$i?>"></span>m <span class="green" id="seconds<?=$i?>"></span>s</p>
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

									

										if (b <=0) {
											clearInterval(a);
										}
									},1000);
							</script>
							</div>
						</div>
							</div>
							<hr>
							<?php $i++; ?>
						@endforeach
						
					</div>
					<div id="past" class="tab-pane fade ">
						<div class="col-md-6">
							<div class="progess_box display_inline">
								<img width="150" src="images/img1.jpg">
							</div>
							<div class="display_inline part-right_img">
								<h5>Raffle Name11</h5>
								<p>Ticket number: <span class="green">3</span></p>
								<p>Ticket number: <span class="green">8</span></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="part-right">
								<h5>Raffle closes in:</h5>
								<p><span class="green">15</span>d <span class="green">9</span>h <span class="green">22</span>m <span class="green">15</span>s</p>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>

</script>
@endsection
