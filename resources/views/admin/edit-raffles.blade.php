@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content">
        <div class="container">
                    <form id="new_post" action="{{ route('products.update',$product->id) }}" method="POST" class="form-style my_account create-raffle" name="new_post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="title_section">
                        <label for="title">Title</label>
                        <input type="text" id="title" value="{{$product->product_name}}" tabindex="1" size="20" name="product_name">
                        </div>
                        <div class="description_section">
                        <label for="description">Description</label>
                        <textarea id="description" tabindex="3" name="description" cols="50" rows="6" placeholder="Start your description with the word “Win”, followed by a complete description of your prize." spellcheck="false">{{$product->description}}</textarea>
                        </div>
                      
                       <div class="images_section">
					<div class="inner-label"><label for="">Image(s)</label></div>
					<input type="file" name="product_image" id="my_image_upload" class="custom-file-input-1" >
                    <input type="hidden" id="my_image_upload_nonce" name="my_image_upload_nonce" ><input type="hidden" name="_wp_http_referer" value="/kv1/create-a-raffle/">					</div>

                        <div class="mar-botm ticket_price_section" id="ticket_price_form">
                        <label for="ticke_price">Ticket Price</label>

<div class="btn-group mr-2" role="group" aria-label="First group">
                            <span id="btn-minus" class="myBtn"><i class="fa fa-minus"></i></span>
                                                <div class="price-btn-ticket">
                                                    <span class="currency_form">£</span>
                                                <input type="number" value="{{$product->price}}" name="price" min="1" max="10">
                                                </div>
                            <span  id="btn-plus" class="myBtn"><i class="fa fa-plus"></i></span>
                        </div>

                        </div>

                        <div class="mar-botm total_tickets_section">
                        <label for="in_stock">Total Tickets</label>
                        <input type="number" id="in_stock_tickets" value="{{$product->quantity}}" name="quantity" min="50" max="" placeholder="Minimum 50 tickets">
                        <div class="col-md-12 padd-zero"><p id="in-stock-p" style="background: rgb(140, 191, 255); padding: 10px; display: none;">Don’t forget the more tickets you
                        put for sale the less likely it is for a ticket holder to win your product and so it will be harder
                        for you to sell your tickets in the first place.</p></div>
                        </div>

                       <div class="datefield">
                        <div class="inner-label"><label for="enddate">End Date</label></div>
                       <input type="text" id="end_date" name="end_date" value="{{$product->end_date}}">
                       </div>

                         <button type="submit" class="submit" value="Submit">Update</button></form>
                    
            </div>
        </div>

@endsection
