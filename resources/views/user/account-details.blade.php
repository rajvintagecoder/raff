@extends('layouts.app')

@section('content')

<section id="white" class="padding">
	<div class="container">
		@if ($message = Session::get('success'))
			<div class="alert bg-success">
			<p>{{$message}}</p>
			</div>
		@endif
		<div class="row">
            @include('inc.user_left_nav')
			<div class="col-md-8">
				<div class="form-style my_account">
				<form method="POST" action="{{route('user-update', $user)}}">
					 @csrf
								
					<input type="hidden" name="id" value="{{$user->id}}">
					<input type="email" name="email" disabled placeholder="&#xf0e0; abc@gmail.com" value="{{$user->email}}">
					  
					<input type="text" name="name" required placeholder=" First Name" value="{{$user->name}}">
					 
					<input type="tel" name="phone" required placeholder="&#xf095; Phone" value="{{$user->phone}}">
					  
				<input type="text" required placeholder=" Address Line 1" name="address_1" value="{{$user->address_1}}">
				   
					<input type="text" required placeholder=" Address Line 2" name="address_2" value="{{$user->address_2}}">
					
					<input type="text" required placeholder=" City/Town" name="city" value="{{$user->city}}">
					
					<input type="text" required placeholder=" PostCode" name="zipcode" value="{{$user->zipcode}}">
					
					<button type="submit" value="Submit">Save Changes</button>	
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>
<script>

function addgreen() {
  var nactive = document.getElementById("nactive");
var active = document.getElementById('active')
  active.classList.add("green");
  nactive.clearList.remove('green');	
}
</script>
@endsection
