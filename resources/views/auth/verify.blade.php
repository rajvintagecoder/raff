@extends('layouts.app')

@section('content')
<section id="white" class="padding" class="varifySection">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
                <div class="title text-center"><h2>{{ __('Verify Your Email Address') }}</h2></div>

                <div class="card-body varify">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a  class="btn GreenButton" href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
       
    </div>
</div>
</section>
@endsection
