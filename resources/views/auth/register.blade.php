@extends('layouts.app')

@section('content')
<section id="white" class="padding">

<div class="container">
    <div class="row justify-content-center">
       
			<div class="title text-center"><h2>Register</h2></div>

                <div class="form-style">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <input id="name" type="text" placeholder=" First Name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row">
                            <input id="surname" type="text" placeholder=" Surname" class="@error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row">
                            <input id="email" type="email" placeholder="&#xf0e0; Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row">
                            <input id="email-confirm" type="email" placeholder="&#xf0e0; Confirm Email" class="" name="email_confirmation" required>

                        </div>

                        <div class="row">
                              <input id="password" type="password" placeholder="&#xf023; Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="row">
                            <input id="password-confirm" type="password" placeholder="&#xf023; Password" class="" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="row">
                              <input id="phone" type="tel" placeholder="&#xf095; Phone" class="@error('phone') is-invalid @enderror" name="phone" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="row">
                               <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            
                        </div>
                    </form>
              
        </div>
    </div>
</div>
</section>
@endsection
