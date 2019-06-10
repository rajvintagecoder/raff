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
						<div class="col-md-6">
							<div class="progess_box display_inline">
								<img width="150" src="images/img1.jpg">
							</div>
							<div class="display_inline part-right_img">
								<h5>Raffle Name</h5>
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
@endsection
