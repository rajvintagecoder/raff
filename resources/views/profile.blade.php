@extends('layouts.app')

@section('content')
<section id="white" class="padding">
	<div class="container">
		<div class="row">
            @include('inc.user_left_nav')
			<div class="col-md-8">
				<div class="form-style my_account">
                    <form method="post" action="{{ route('update') }}">
                     @csrf
                    <input type="text" name="first_name" placeholder=" First Name" class="@error('first_name') is-invalid @enderror" value="{{ $user->name }}">
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<input type="tel" name="phone" placeholder="&#xf095; Phone" value="{{ $user->phone }}">
					<input type="text" name="address_line_1" placeholder=" Address Line 1" value="{{ $user->address_line_1 }}">
					<input type="text" name="address_line_2" placeholder=" Address Line 2" value="{{ $user->address_line_2 }}">
					<input type="text" name="city" placeholder=" City/Town" value="{{ $user->city }}">
					<input type="text" name="postcode" placeholder="PostCode" value="{{ $user->postcode }}">
                    <button type="submit" value="Submit">Save Changes</button>
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
