@extends('layouts.app')

@section('content')
<section id="white" class="padding">
<div class="container">
    <div class="row justify-content-center">
         
			<div class="title text-center"><h2>Sign In</h2></div>
               
                <div class="form-style">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <input id="email" type="email" placeholder="&#xf0e0; Email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                    

                        <div class="row">
                                <input id="password" type="password" placeholder="&#xf023; Password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="link-container">
                        <div class="row padd0">
                            <div class="col-md-5 col-sm-5 ">
                               
                                    <div class="form-check" id="fcheck">
                                    <label class="checkbox-container">{{ __('Remember Me') }}
                                    <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                     </label>  
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 padd0 ">
                           @if (Route::has('password.request'))
                                    <a class="forget-link float-right" href="{{ route('password.request') }}">
                                        {{ __("I've forgotten my password") }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class=" row">
                            
                                <button type="submit" class="buttonWithMTop">
                                    {{ __('Sign In') }}
                                </button>

                        </div>
                    </form>
           
        </div>
    </div>
</div>
</section>
@endsection
