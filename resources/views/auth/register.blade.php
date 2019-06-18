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
                            <input id="name" type="text" placeholder=" First Name" class="" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                        <div class="errors">{{$errors->first('name')}}</div>   
                        </div>

                        <div class="row">
                            <input id="surname" type="text" placeholder=" Surname"  name="surname" value="{{ old('surname') }}" autocomplete="surname" autofocus>
                            <div class="errors">{{$errors->first('surname')}}</div>   
                        </div>

                        <div class="row">
                            <input id="email" type="email" placeholder="&#xf0e0; Email"  name="email" value="{{ old('email') }}" autocomplete="email">
                            <div class="errors">{{$errors->first('email')}}</div>   
                        </div>
                        <div class="row">
                        <input id="email-confirm" value ="{{old('email_confirmation')}}" type="email" placeholder="&#xf0e0; Confirm Email" class="" name="email_confirmation">
                            <div class="errors">{{$errors->first('email_confirmation')}}</div>
                        </div>

                        <div class="row">
                              <input id="password" type="password" placeholder="&#xf023; Password"  name="password" autocomplete="new-password">
                              <div class="errors">{{$errors->first('password')}}</div>

                        </div>

                        <div class="row">
                            <input id="password-confirm" type="password" placeholder="&#xf023; Confirm Password" class="" name="password_confirmation" autocomplete="new-password">
                             <div class="errors">{{$errors->first('password_confirmation')}}</div>
                        </div>
                        <div class="row">
                        <input id="phone" type="tel" placeholder="&#xf095; Phone" value="{{old('phone')}}" name="phone" autocomplete="phone">
                             <div class="errors">{{$errors->first('phone')}}</div>
                        
                        </div>
                         <div class="row">
                                <label class="checkbox-container">I am 18 years old or over
                                    <input type="checkbox"  name="ageChecker" value="Y">
                                    <span class="checkmark"></span>
                                </label>  
                               <div class="errors" id="ageError">{{$errors->first('ageChecker')}}</div>
                        </div>
                        <div class="height20px"></div>
                        <div class="row">
                                <label class="checkbox-container">I would like to opt-in to email communication from
Rafflrs. We store your data securely, never sell your data, and only communicate
infrequently on matters relating to our competitions. You can read our full Privacy Policy
<a href="{{route('privacy')}}" target="_blank">here</a>
                                    <input type="checkbox"  name="emailCommunication" value="Y">
                                    <span class="checkmark"></span>
                                </label>  
                               <div class="errors">{{$errors->first('emailCommunication')}}</div>
                        </div>
                        <div class="height20px"></div>
                        <div class="row">
                            <button type="button" class="nextBtn">Next</button>
                        </div>
                        <div class="row">
                               <button type="submit" class="hidden" id="register">
                                    {{ __('Register') }}
                                </button>
                            
                        </div>
                    </form>
                <div class="text-center" style="margin-top:20px;">Already have an account? <a href="{{route('login')}}" class="green">Sign In</a></div>
        </div>
    </div>
</div>
<div class="overlay"></div>
<div class="nextModal">
    <h3>Terms and Conditions</h3>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus dolores tempora magnam nemo eveniet! Consequuntur sint aut, iusto itaque quos, enim accusantium excepturi aspernatur eaque tempore rem molestiae accusamus voluptate!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget lobortis leo. In dictum lacus vitae mi aliquet, sit amet auctor erat euismod. Nam aliquet in augue vitae malesuada. In at purus vulputate, iaculis tellus eget, elementum nisl. Integer euismod accumsan mauris et consectetur. Mauris non finibus nibh. Aenean faucibus ex in augue efficitur, non tempor nulla interdum. Morbi volutpat dolor ut mattis sollicitudin. Sed at fringilla ante, et tristique justo. Nullam ut pellentesque nisl, in venenatis diam. Morbi tristique orci eros, non facilisis sapien rhoncus in. Duis elementum vestibulum elit at posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque congue tincidunt fringilla. Pellentesque a felis mi. Phasellus nec augue diam.
</p>
<p>
     <label class="checkbox-container">Aggree Terms & Conditions
                                    <input type="checkbox"  name="terms" id="tandc">
                                    <span class="checkmark"></span>
                                </label>  
                            </p>
                             <button class="closeBtn float-right">Continue</button></div>
   
</section>


@endsection

