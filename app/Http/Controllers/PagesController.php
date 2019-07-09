<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
use App\Cart;


class PagesController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->take(4)->get();
        $endingSoon = DB::table('products')->whereRaw('DATEDIFF(end_date,updated_at) < 7')->where('status', 1)->take(4)->get();
        $title = 'Be a Seller, Be a Winner, Be a Rafflr';
        return view('pages.index', compact('products', 'endingSoon'));
    }
    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function liveraffles()
    {
        $title = 'Live Raffles';
        $raffles = Product::where('status', 1)->take(4)->get();
        $allRaffles = Product::all();
        $endingSoon = DB::table('products')->whereRaw('DATEDIFF(end_date,updated_at) < 7')->where('status', 1)->take(4)->get();

        return view('pages.live-raffles', compact('raffles', 'endingSoon', 'allRaffles'));
    }
    public function pastwinners()
    {
        $title = 'Past Winners';
        return view('pages.past-winners')->with('title', $title);
    }
    public function faqs()
    {
        $title = "FAQs";
        return view('pages.faqs')->with('title', $title);
    }
    public function contactus()
    {
        $title = 'Contact Us';
        return view('pages.contact-us')->with('title', $title);
    }
    public function termsplay()
    {
        $title = 'Terms of Play';
        return view('pages.terms-of-play')->with('title', $title);
    }
    public function privacy()
    {
        $title = 'Privacy';
        return view('pages.privacy')->with('title', $title);
    }
    public function viewall()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(8);
        return view('pages.view-all')->with('products', $products);
    }
    public function cart()
    {
        return view('pages.cart');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
}
