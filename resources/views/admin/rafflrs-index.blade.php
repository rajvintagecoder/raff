@extends('layouts.adminLayout.admin_design')
@section('content')
    
 <div class="content"> 
	 <div class="container-fluid"> 
		  
		<a href="products/create" rel="tooltip" title="Add New Raffle" class="btn btn-warning btn-md blackButton">
                     <i class="material-icons">add</i> Add New Raffle
		</a>
		<div class="height"></div>
		<script>
			var year = new Array();
            var month = new Array();
            var day = new Array();
            var hh = new Array();
            var mm = new Array();
            var ss = new Array();
            var ii = 0;
		</script>
		@php
			$i =0;
		@endphp
		  @foreach ($products as $product)   
          <div class="row">
                        
			<div class="col s3">
				<img width="150" src="storage/product_images/{{$product->product_image}}" class="rafImg">
			</div>
     		<div class="col s3">
				<h5>{{$product->product_name}}</h5>
				<p>Ticket Price: <span class="green">{{$product->price}}</span></p>
				<p>Total Quantity: <span class="green">{{$product->quantity}}</span></p>
			</div>
			<div class="col s3">
				<h5>Raffle closes in:</h5>
			<p>
				@if ($product->status == 1)
				@php	
				$i++;
				$endDate = strtotime($product->end_date);
                    $y = date('Y',$endDate);
                    $m = date('m',$endDate);
                    $d = date('d',$endDate);
                    $hh = date('h',$endDate);
                    $mm = date('i',$endDate);
					$ss = date('s',$endDate);
					getTimer($y, $m, $d, $hh, $mm, $ss, $i);
				
				@endphp
			
				@else
				<span class="bg-warning">Ended</span>
				@endif
				
			</div>
			<div class="col s3">
				<div class="row">
					<div class="col s6">
						<a href="products/{{$product->id}}/edit" rel="tooltip" title="Edit Raffle" class="btn btn-info btn-sm roundBtn"><i class="material-icons">edit</i></a>
					</div>
					<div class="col s6">
<form action="{{ route('products.destroy',$product->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" rel="tooltip" title="Delete Raffle" class="btn btn-danger  btn-sm roundBtn"><i class="material-icons ">delete_forever</i></button>
				</form>
					</div>
				</div>
				
			</div>
			</div>
			<hr>
			@endforeach
			<script>
				var a = setInterval(function() {
					for (i = 1; i <= ii; i++) {
						var count = new Date(year[i-1] + ',' + month[i-1] + ',' + day[i-1] + ' ' + hh[i-1] + ':' + mm[i-1] + ':' + ss[i-1]).getTime();
						var now = new Date().getTime();
						var b = count - now;

						var days = Math.floor(b / (1000 * 60 * 60 * 24));
						var hours = Math.floor(b % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
						var minutes = Math.floor(b % (1000 * 60 * 60) / (1000 * 60));
						var seconds = Math.floor(b % (1000 * 60) / 1000);
						
						$('#days'+i).html(days + ' d ');
						$('#hh'+i).html(hours + ' h ');
						$('#mm' + i).html(minutes + ' m ');
						$('#ss' + i).html(seconds + ' s ');
					
					}
					if (b <= 0) {
						clearInterval(a);
					}
				}, 1000);
			</script>
          <ul class="pagination">
          <li >{{$products->links()}}</li>
          </ul>	
	    </div>
</div>
@endsection