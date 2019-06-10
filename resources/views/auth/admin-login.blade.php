@extends('layouts.app')

@section('content')
<section id="white" class="padding">

<div class="container">
    <div class="row justify-content-center">
			<div class="title text-center"><h2>Admin Login</h2></div>

                <div class="form-style">
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

                        <div class="row">
                            <input id="email" type="email" placeholder="&#xf0e0; Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="row">
                         <input id="password" type="password" placeholder="&#xf023; Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                         <div class="link-container">
                        <div class="row padd0">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                           @if (Route::has('password.request'))
                                    <a class="forget-link float-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </div>

                        <div class="row">
                            
                                <button type="submit" class="">
                                    {{ __('Login') }}
                                </button>
                           
                        </div>
                    </form>
              
        </div>
    </div>
</div>
</section>
@endsection
