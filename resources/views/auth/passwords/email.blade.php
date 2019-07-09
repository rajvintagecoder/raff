@extends('layouts.app')

@section('content')
<section id="white" class="padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="title text-center"><h2>Forgot Password</h2></div>
			<div class="form-style">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						<form method="POST" action="{{ route('password.email') }}">
							@csrf

									<input id="email" type="email" placeholder="&#xf0e0; Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror

									<button type="submit" class="btn btn-primary">
										{{ __('Send Email') }}
									</button>
						</form>
			</div>
		</div>
	</div>
</section>	
@endsection
