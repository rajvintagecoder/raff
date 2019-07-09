@extends('layouts.app')

@section('content')

<section id="white" class="padding">
	<div class="container">
       <div class="row">
            <div class="title text-center"><h2>Cart</h2></div>
          
          @include('inc.messages')
            @php $totalCost  = 0;  
            $userID = Auth::user()->id;
            @endphp
            @foreach ($cartContent as $cartItem)
             <div class="border_radius cart col-md-12">
				<div class="row">
					<div class="col-md-2">
						<div class="progess_box display_inline">
                        <a href="products/{{$cartItem->productid}}"><img  src="storage/product_images/{{$cartItem->product_image}}"></a>
                        </div>
                    </div>
                    <div class="col-md-10">    	
                            
                    <h5 class="cartProductTitle"><a href="products/{{$cartItem->productid}}">{{$cartItem->product_name}}</a></h5>
                             <div class="ticketList">
                                    @foreach (unserialize($cartItem->tickets) as $key=>$tickets)
                                <div class="row">
                                    <div class="col-md-6"><p class="ticketContainer">Ticket number: <span class="green"><?=$tickets?></span></p></div>
                                <div class="col-md-6"><p class="priceContainer"><span class="green">£<?= money_format("%.2n", $cartItem->price)?></span><a href="cart/{{$key}}-{{$cartItem->productid}}-{{$cartItem->price}}/edit"><span class="icon"></span></a></p></div>  
                                </div>
                                    @endforeach
                             </div> 
                           
					</div>
					
                </div>
            </div>
            @php
                $totalCost = $totalCost + $cartItem->cart_total;
            @endphp
            <div class="cartTotalContainer"><h5>Subtotal: <span class="green">£<?=money_format("%.2n",$cartItem->cart_total)?></span></h5></div>
            @endforeach
        </div>


			<div class="border_radius mar-top col-md-12">
				<div class="row align-items-center">
					<div class="col-md-6">
                       
            <?php
                if(isset($cartItem->cart_timeout)){    
                $endDate = strtotime($cartItem->cart_timeout);

                    $y = date('Y',$endDate);
                    $m = date('m',$endDate);
                    $d = date('d',$endDate);
                    $hh = date('H',$endDate);
                    $mm = date('i',$endDate);
                    $ss = date('s',$endDate);?>
                    <input type="hidden" name="" id="year" value="<?=$y?>">
                     <input type="hidden" name="" id="month" value="<?=$m?>"> 
                     <input type="hidden" name="" id="date" value="<?=$d?>">   
                     <input type="hidden" name="" id="hours" value="<?=$hh?>">
                     <input type="hidden" name="" id="minutes" value="<?=$mm?>">   
                     <input type="hidden" name="" id="seconds" value="<?=$ss?>"> 
                     <input type="hidden" id="userId" value="<?=$userID?>">  


            <?php } ?>
						<h5><span id="clockDiv"></span> left to complete purchase</h5>
					</div>
					<div class="col-md-3 offset-md-3">
						<div class="text-right">
                        <h5>Total: <span class="green">£<?=money_format("%.2n",$totalCost)?></span></h5>
                        <div class="site_green_btn"><a style="margin-top:15px;" href="cart-status/{{$userID}}">Checkout</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

