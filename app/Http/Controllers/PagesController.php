<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Be a Seller, Be a Winner, Be a Rafflr';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }
    public function liveraffles(){
        $title = 'Live Raffles';
        return view('pages.liveraffles')->with('title', $title);
    }
    public function pastwinners(){
        $title = 'Past Winners';
        return view('pages.pastwinners')->with('title',$title);
    }
}
