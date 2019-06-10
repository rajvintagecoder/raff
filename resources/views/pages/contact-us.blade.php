@extends('layouts.app')

@section('content')

<section id="white" class="padding">
	<div class="container">
		<div class="row ">
		<div class="title text-center"><h2>{{$title}}</h2></div>
			<div class="form-style">
				<input type="text" placeholder=" First Name">
				<input type="text" placeholder=" Surname">
				<input type="email" placeholder="&#xf0e0; Email">
				<input type="text" placeholder=" Subject">
				<textarea type="text" rows="8" placeholder="Your Message"></textarea>
				<button type="submit" value="Submit">Submit</button>
				
			</div>
		</div>
	</div>
</section>

@endsection