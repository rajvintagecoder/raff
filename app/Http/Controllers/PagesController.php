<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Be a Seller, Be a Winner, Be a Rafflr';
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function liveraffles()
    {
        $title = 'Live Raffles';
        return view('pages.live-raffles')->with('title', $title);
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
}
