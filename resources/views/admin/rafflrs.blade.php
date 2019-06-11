@extends('layouts.app')

@section('content')
<section id="white" class="padding">
        <div class="container">
            <div class="row">
                @include('inc.admin_left_nav')
                <div class="col-md-8">
                    <div class="row ">
                     <form id="new_post" class="form-style my_account create-raffle" name="new_post" method="post" action="" enctype="multipart/form-data">
                        <div class="title_section">
                        <label for="title">Title</label>
                        <input type="text" id="title" value="" tabindex="1" size="20" name="title" required="">
                        </div>
                        <div class="description_section">
                        <label for="description">Description</label>
                        <textarea id="description" tabindex="3" name="description" cols="50" rows="6" placeholder="Start your description with the word “Win”, followed by a complete description of your prize." required="" spellcheck="false"></textarea>
                        </div>
                        <div class="category_section">
                        <label for="category">Category</label>
                        <select name="cat" id="cat" class="postform" tabindex="4">
                            <option value="-1">Please select…</option>
                            <option class="level-0" value="17">Other</option><option class="level-0" value="24">Cars</option><option class="level-0" value="26">Experiences</option><option class="level-0" value="22">Fashion</option><option class="level-0" value="25">Houses</option><option class="level-0" value="23">Jewellery</option><option class="level-0" value="21">Technology</option>
                        </select>
                        </div>

                        <div class="images_section">
                        <div class="col-md-12 inner-label"><label for="">Image(s)</label></div>
                        <input type="file" name="my_image_upload[]" id="my_image_upload[]" multiple="true" class="custom-file-input-1" required="">
                        <input type="hidden" id="my_image_upload_nonce" name="my_image_upload_nonce" value="01684dc991"><input type="hidden" name="_wp_http_referer" value="/kv1/create-a-raffle/">					</div>

                        <div class="delivery_section">
                        <label for="delivery">Delivery</label>
                        <select name="rf_delivery" id="delivery" class="deliveryform" required="">
                            <option value=" ">Please select...</option>
                            <option class="delivery_not" value="delivery_not">Delivery not included</option>
                            <option class="delivery_uk" value="delivery_uk">UK delivery included</option>
                            <option class="delivery_in" value="delivery_international">International delivery included</option>
                            <option class="delivery_co" value="delivery_cost">Collection only</option>
                        </select>
                        </div>

                        <div class="mar-botm ticket_price_section" id="ticket_price_form">
                        <label for="ticke_price">Ticket Price</label>


                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="btn-minus"><span class="fas fa-minus"></span></button>
                         </span>
                         <div class="price-btn-ticket">
                             <span class="currency_form">£</span>
                             <input type="number" value="1" name="ticket_price" min="1" max="10" required="">
                         </div>

                         <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="btn-plus"><span class="fas fa-plus"></span></button>
                         </span>

                        </div>

                        <div class="mar-botm total_tickets_section">
                        <label for="in_stock">Total Ticket Quantity</label>
                        <input type="number" id="in_stock_tickets" value="" name="in_stock" min="50" max="" placeholder="Minimum 50 tickets" required="">
                        <div class="col-md-12 padd-zero"><p id="in-stock-p" style="background: rgb(140, 191, 255); padding: 10px; display: none;">Don’t forget the more tickets you
                        put for sale the less likely it is for a ticket holder to win your product and so it will be harder
                        for you to sell your tickets in the first place.</p></div>
                        </div>

                        <div class="reserve_section" id="reserve_section_condition" style="display: block;">
                        <label for="ends">Reserve Ticket Quantity</label>
                        <!--div class="reserve-ti"><input type="radio" name="reserve_tickets" value="reserve_tickets" id="reserve_tickets"><span class="reserve-t">Select For reserve tickets</span></div-->
                        <input id="rs_ticket" type="number" name="reserve_ticket" placeholder="Minimum 50 tickets" min="0">
                        <div class="col-md-12 padd-zero"><p style="display: none;" id="rs-tickets-p">Once the raffle has ended, a winner will still be chosen if this number is met through ticket sales.</p></div>
                        </div>

                        <div class="raffle_end_section">
                        <label for="ends">End Date &amp; Time</label>
                        <select name="raffle_ends" id="raffle_ends" required="">
                            <option value=" ">Please select...</option>
                            <option value="select_date">End date &amp; time</option>
                            <option value="tickets_sold">Raffle ends when all tickets are sold</option>
                        </select>
                        <input type="text" name="e_date" placeholder="Choose a Date" value="" id="rf_date" style="display: none;">
                        </div>

                        <div class="questions_section">
                        <label for="select_questions">Choose A Question</label>
                        <p>Entrants must answer a multiple choice question to enter your raffle.</p>
                        <select name="rf_questions" class="rf_questions_change" required="">
                        <option value="">Please select...</option>
                        <option value="1836">question name here</option><option value="203">question 2</option><option value="169">Which tennis player has won the most men's Grand Slam titles?</option>					</select>
                        <div id="to_call" style="display:none;">http://hoshiarpurcyclingclub.in/kv1/wp-content/themes/rafflrs/ajax_question_options.php</div>
                        <div class="rs_answers">
                        </div>

                        </div>

                        <p>You will be charged a 10% commission
                            on revenue generated from ticket sales and receive your payment once the winner has
                            received their prize.</p>

                        <button type="submit" value="Submit">Publish</button></form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
