<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentuserid = Auth::user()->id;
        $cartContent =  DB::table('products')
            ->join('carts', 'carts.productid', 'products.id')
            ->get();
        return view('home')->with('cartContent', $cartContent);
    }
}
