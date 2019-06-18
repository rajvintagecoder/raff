<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'productid' => 'required',
            'userid' => 'required',
            'quantity' => 'required',
        ]);
        if ($request->userid == 0) {
            return redirect('/login')->with('success', 'Login Needed');
        } else {
            // dd($request->quantity * $request->price);
            $cart = new Cart();
            $cart->productid = $request['productid'];
            $cart->userid = $request['userid'];
            $cart->quantity = $request['quantity'];
            $cart->cart_total  = $request->quantity * $request->price;

            $totalQuantity = $request['totalQuantity'];
            $productName = strtolower($request['productName']);
            $tickets = randomGen(1, $totalQuantity, $request['quantity'], $productName);
            $cart->tickets = $tickets;
            // print_r($tickets);
            $cart->save();
            return redirect('/home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
