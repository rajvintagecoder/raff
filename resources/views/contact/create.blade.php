@extends('layouts.app')

@section('content')

<section id="white" class="padding">
	<div class="container">
		<div class="row ">
			
		<div class="title text-center"><h2>Contact Us</h2></div>
			<div class="form-style">
				 <?php if(isset($message)){ ?>
				<div class="alert alert-success" role="alert">
					<strong>Success.</strong><?=$message?>
				</div>
				<?php } ?>
			<form action="{{route('contactme')}}" method="post">
			<input type="text" placeholder=" First Name" name="firstname" value="{{old('firstname')}}">
			 <div class="errors">{{$errors->first('firstname')}}</div>
			<input type="text" placeholder=" Surname" name="surname" value="{{old('surname')}}">
			 <div class="errors">{{$errors->first('surname')}}</div>
			<input type="email" placeholder="&#xf0e0; Email" name="email" value="{{old('email')}}">
			 <div class="errors">{{$errors->first('email')}}</div>
			<input type="text" placeholder=" Subject" name="subject" value="{{old('subject')}}">
			 <div class="errors">{{$errors->first('subject')}}</div>
			<textarea type="text" rows="8" placeholder="Your Message" name="message">{{old('message')}}</textarea>
			 <div class="errors">{{$errors->first('message')}}</div>
			 @csrf
				<button type="submit" value="Submit">Submit</button>
			</form>	
			</div>
		</div>
	</div>
</section>

@endsection