@extends('layouts.app')

@section('content')
   <section id="white" class="padding">
        <div class="container">
           <div class="row">
                @include('inc.admin_left_nav')
                <div class="col-md-8">
                    <div class="row ">
                <ul class="nav nav-tabs col-md-12">
					<li class="active"><a class="active" data-toggle="tab" href="#live">live</a></li>
					<li><a data-toggle="tab" href="#past">past</a></li>
				</ul>	
<a href="/products/create" class="btn round orange text-white pull-right"><i class="material-icons">add</i></a>
               <div class="tab-content border_radius col-md-12">
					<div id="live" class="tab-pane fade show active ">
                        @foreach ($products as $product)
                          <div class="row">  
								<div class="col-md-7">
									<div class="progess_box display_inline">
									<img width="150" src="/storage/product_images/{{$product->product_image}}">
									</div>	
									<div class="display_inline part-right_img">
										<h5>{{$product->product_name}}</h5>
								   <p>Ticket Price: <span class="green">{{$product->price}}</span></p>
									<p>Total Quantity: <span class="green">{{$product->quantity}}</span></p>
									</div>
								</div>
							<div class="col-md-3">
								<div class="part-right">
									<h5>Raffle closes in:</h5>
									<p><span class="green">15</span>d <span class="green">9</span>h <span class="green">22</span>m <span class="green">15</span>s</p>
								</div>
							</div>
							<div class="col-md-2">
									<a href="/products/{{$product->id}}/edit" class="btn round orange text-white"><i class="material-icons">edit</i></a>
									<form action="{{ route('products.destroy',$product->id) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn round red text-white"><i class="material-icons ">delete_forever</i></button>
									</form>
							</div>
						</div>
						
                          <hr>
                          <div class="height20px"></div>
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
                 <div class="height20px"></div>
				<ul class="pagination">
          <li >{{$products->links()}}</li>
          </ul>
</div>
	    </div>
	</div>
</section>
@endsection