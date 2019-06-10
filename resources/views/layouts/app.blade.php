<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">       
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">

   

</head>
<?php $route = Route::currentRouteName();?>
<body <?php if($route == 'home'){ ?> class="home" <?php }else { ?>class="height_vh"<?php } ?>>
     <div id="app">
     @include('inc.header')   
          @yield('content')
    @include('inc.footer')
    </div>


    <script src="{{asset('js/app.js')}}"></script> 
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/custom-js.js')}}"></script>
</body>
</html>
