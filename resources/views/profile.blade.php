@extends('layouts.app')

@section('content')
<section id="white" class="padding">
	<div class="container">
		<div class="row">
            @include('inc.user_left_nav')
			<div class="col-md-8">
				<div class="form-style my_account">
					<input type="email" placeholder="&#xf0e0; abc@gmail.com">
					<input type="text" placeholder=" First Name">
					<input type="tel" placeholder="&#xf095; Phone">
					<input type="text" placeholder=" Address Line 1">
					<input type="text" placeholder=" Address Line 2">
					<input type="text" placeholder=" City/Town">
					<input type="text" placeholder=" PostCode">
					<button type="submit" value="Submit">Save Changes</button>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
