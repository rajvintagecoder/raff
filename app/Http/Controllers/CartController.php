<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use function Opis\Closure\unserialize;
use function Opis\Closure\serialize;

use App\Product;

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
    {
        // $cartContent = Cart::where('userid', Auth::user()->id)->get();
        $cartContent =  DB::table('products')
            ->join('carts', 'carts.productid', '=', 'products.id')
            ->where('userid', Auth::user()->id)
            ->get();
        return view('pages.cart')->with('cartContent', $cartContent);
    }

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

            $uid = $request->userid;
            $productPrice = $request->price;
            $cart = new Cart();
            $cart->productid = $request['productid'];
            $cart->userid = $request['userid'];
            $cart->quantity = $request['quantity'];
            $cart->cart_total  = $request->quantity * $request->price;
            $cart->cart_timeout = date('Y-m-d H:i:s', strtotime('+10 minutes', strtotime(now())));
            $checkCart =  DB::table('carts')->where('productid', $request['productid'])->where('userid', $uid)->get();
            //dd(count($checkCart));
            if (count($checkCart) >= 1) {
                $pid = $request['productid'];

                $quantityInCart = $checkCart['0']->quantity;
                $totalCartQuantity = $request['quantity'] + $quantityInCart;
                if ($totalCartQuantity > 10) {
                    return redirect('/cart')->with('warning', 'Cannot Buy More Than 10 Raffles');
                } else {
                    $ticketsInCart = $checkCart['0']->tickets;
                    $cartTotal = $checkCart['0']->cart_total;
                    $ticket = randomGen(1, $request['totalQuantity'], $request['quantity'], strtolower($request['productName']), $request['productid']);
                    $finalTicketsCount = array_merge(unserialize($ticketsInCart), unserialize($ticket));
                    $FinalCartTotal = count($finalTicketsCount) * $productPrice;
                    DB::update('update carts set quantity = ?, cart_total = ?,  tickets = ?  where productid = ? AND userid = ?', [$totalCartQuantity, $FinalCartTotal, serialize($finalTicketsCount), $pid, $uid]);
                    DB::update('update products set sold = ?  where id = ?', [$totalCartQuantity, $pid]);
                    return redirect('cart')->with('success', 'Raffle Added To Cart');
                }
            } else {
                $totalQuantity = $request['totalQuantity'];
                $productName = strtolower($request['productName']);
                $tickets = randomGen(1, $totalQuantity, $request['quantity'], $productName, $request['productid']);
                $ticketsSold = DB::table('products')->where('id', $request['productid'])->get();
                $totalSold = $ticketsSold['0']->sold + $request['quantity'];
                DB::update('update products set sold = ?  where id = ?', [$totalSold, $request['productid']]);
                $cart->tickets = $tickets;
                $cart->save();
                return redirect('cart')->with('success', 'Raffle Added To Cart');
            }
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
    public function edit($cart)
    {
        $data = explode('-', $cart);
        $indexId = $data[0];
        $productId = $data[1];
        $productPrice = $data[2];
        $userId = Auth::user()->id;
        $cartTickets =  DB::table('carts')->where('productid', $productId)->where('userid', $userId)->get();
        $ticketsObj = DB::table('tickets')->where('pid', $productId)->get();
        $productTable  = DB::table('products')->where('id', $productId)->get();
        $productSold = $productTable[0]->sold - 1;
        $totalPrice = $productSold * $productPrice;
        $cTickets = unserialize($cartTickets[0]->tickets);
        $cartQuantity = $cartTickets['0']->quantity - 1;
        $ticketTickets = unserialize($ticketsObj[0]->tickets);
        unset($cTickets[$indexId]);
        unset($ticketTickets[$indexId]);
        $ticketsCart = array_values($cTickets);
        $tickets = array_values($ticketTickets);
        DB::update('update tickets set tickets = ?  where pid = ?', [serialize($tickets), $productId]);
        DB::update('update carts set quantity = ?, cart_total = ?, tickets = ?  where productid = ? AND userid = ?', [$cartQuantity, $totalPrice, serialize($ticketsCart), $productId, $userId]);
        DB::update('update products set sold = ?  where id = ?', [$productSold, $productId]);

        return redirect('cart')->with('success', 'Cart Quantity Upated');
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
    { }
    public function deleteCartRequest()
    {
        $uid = $_GET['userID'];
        $cart = new Cart();
        $cartData = $cart::all()->where('userid', $uid);

        foreach ($cartData as $item) {

            $totalSold = Product::where('id', $item->productid)->get();
            $sold = $totalSold['0']->sold - $item->quantity;
            echo $sold;
            DB::update('update products set sold = ?  where id = ?', [$sold, $item->productid]);
        }
        DB::table('carts')->where('userid', $uid)->delete();
        DB::table('tickets')->where('uid', $uid)->delete();
        return view('home');
    }
}
