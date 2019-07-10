<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('home');
Route::get('home', 'PagesController@index');
Route::get('about', 'PagesController@about')->name('about');
Route::get('live-raffles', 'PagesController@liveraffles')->name('liveraffles');
Route::get('past-winners', 'PagesController@pastwinners')->name('pastwinners');
Route::get('faqs', 'PagesController@faqs')->name('faqs');
Route::get('contact', 'ContactFormController@create')->name('contactus');
Route::post('contact', 'ContactFormController@store')->name('contactme');
Route::post('subscriber', 'NewsLettersController@store')->name('subscribe');
Route::get('terms-of-play', 'PagesController@termsplay')->name('termsplay');
Route::get('privacy', 'PagesController@privacy')->name('privacy');
Route::get('view-all', 'PagesController@viewall')->name('viewall');
Route::get('success', 'PagesController@checkoutSuccess')->name('success');
//Checkout
Route::get('checkout', 'CartController@getCheckout')->name('checkout');
Route::post('checkout', 'CartController@postCheckout')->name('checkout');
// Route::get('stripe', 'CheckoutController@stripe');
// Route::post('stripe', 'CheckoutController@stripePost')->name('stripe.post');

Auth::routes(['verify' => true]);
Route::get('account-details', 'HomeController@index')->name('index');
Route::get('my-tickets', 'HomeController@mytickets')->name('my-tickets');
//Route::get('account-details', 'ProfileController@index')->name('account-details');
Route::get('account-details/{user}',  'UserController@edit')->name('user-edit');
Route::post('account-details/{user}/update',  'UserController@update')->name('user-update');
Route::delete('users-list/{delete}', 'UserController@destroy')->name('user.destroy');

//for admin package management
Route::get('rafflrs', 'ProductController@index')->name('rafflrs');
Route::get('account', 'AccountController@index')->name('account');
Route::get('subscribers-list', 'AdminController@subscriberslist')->name('subscribers');
Route::delete('subscribers-list/{delete}', 'NewsLettersController@destroy')->name('subscriber.destroy');
Route::get('users-list', 'AdminController@userslist')->name('users-list');
Route::get('show-user/{id}', 'AdminController@showuser')->name('show-user');
Route::get('order-details/{id}', 'AdminController@orderdetails')->name('order-details');

//DeleteCart
Route::get('deleteCartRequest', 'CartController@deleteCartRequest')->name('delete-cart');
Route::post('ajaxRequest', 'CartController@ajaxRequestPost');
//End of DeleteCart
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard')->middleware('auth:admin');
});

Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoriesController');
Route::resource('cart', 'CartController');
