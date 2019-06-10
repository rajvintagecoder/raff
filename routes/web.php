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
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/live-raffles', 'PagesController@liveraffles')->name('liveraffles');
Route::get('/past-winners', 'PagesController@pastwinners')->name('pastwinners');
Route::get('/faqs', 'PagesController@faqs')->name('faqs');
Route::get('/contact-us', 'PagesController@contactus')->name('contactus');
Route::get('/terms-of-play', 'PagesController@termsplay')->name('termsplay');
Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
