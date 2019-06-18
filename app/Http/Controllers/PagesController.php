<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $products = Product::take(4)->get();
        $title = 'Be a Seller, Be a Winner, Be a Rafflr';
        return view('pages.index')->with('products', $products);
    }
    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function liveraffles()
    {
        $title = 'Live Raffles';
        $products = Product::orderBy('created_at', 'desc')->paginate(8);

        return view('pages.live-raffles')->with('products', $products);
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
}
