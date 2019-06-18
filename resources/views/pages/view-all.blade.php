@extends('layouts.app')

@section('content')
    <section id="grey" class="padding">
	<div class="container">
		<div class="row">
			<div class="title text-center"><h2>View ll Raffles</h2></div>
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
        	<ul class="pagination">
                <li >{{$products->links()}}</li>
          </ul>
	</div>
</section>
@endsection