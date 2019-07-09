<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
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
<script>
$(".nextBtn").on("click", function(){
  $(".overlay, .nextModal").addClass("active");
});

$(".closeBtn, .overlay").on("click", function(){
   $(".overlay, .nextModal").removeClass("active");
   if($('#tandc').prop('checked') == true){
   $("#register").removeClass('hidden');
   $(".nextBtn").addClass("hidden");
   }
});

$(document).keyup(function(e) {
  if (e.keyCode === 27) {
    $(".overlay, .nextModal").removeClass("active");
  }
});

var incrementPlus;
var incrementMinus;

var buttonPlus  = $("#right-plus");
var buttonMinus = $("#left-minus");

var incrementPlus = buttonPlus.click(function() {
	var $n = $('#quantity');
 
  if($n.val() < 10){
     $n.val(Number($n.val())+1 );
     $('#ticket').val('Tickets');
  }
});

var incrementMinus = buttonMinus.click(function() {
	var $n = $('#quantity');
	var amount = Number($n.val());
	if (amount > 1) {
		$n.val(amount-1);
  }else{
      $('#ticket').val('Ticket');
  }
});
</script>
<script>
var year = $('#year').val();
var month = $('#month').val();
var day = $('#date').val();
var hh = $('#hours').val();
var mm = $('#minutes').val();
var ss = $('#seconds').val();
var userID = $('#userId').val(); 
console.log(year+','+month+','+day+' '+hh+':'+mm+':'+ss);
var deadline = new Date(year+','+month+','+day+' '+hh+':'+mm+':'+ss).getTime();
var x = setInterval(function() { 
var now = new Date().getTime(); 
var t = deadline - now; 
console.log(new Date());
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
console.log(seconds);
$("#clockDiv").text( minutes + ":" + seconds ); 
    if (t <= 0) { 
       $("#clockDiv").text("CART EXPIRED"); 
     $.ajax({
           type:'GET',
           url:"{{route('delete-cart')}}",
           data:{userID:userID},
           success:function(data){
              console.log(data);
           }

        });
       //clearInterval(x); 
    } 
}, 1000); 
</script>
</body>
</html>
