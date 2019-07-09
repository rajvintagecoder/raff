<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Subscription;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $endingSoon = DB::table('products')->whereRaw('DATEDIFF(end_date,updated_at) < 7')->where('status', '1')->get();
        $activeRaffles = Product::where('status', 1)->get();
        $endedRaffles = Product::where('status', 0)->get();
        $users = User::all();
        $subscribers = Subscription::all();
        return view('admin.dashboard', compact('products', 'activeRaffles', 'endedRaffles', 'users', 'endingSoon', 'subscribers'));
    }
    public function userslist()
    {
        $users = User::all();
        return view('admin.users-list')->with('users', $users);
    }
    public function showuser($id)
    {
        $user = User::find($id);
        return view('admin.show-user')->with('user', $user);
    }
    public function orderdetails($id)
    {
        $orders = User::find($id);
        return view('admin.order-details')->with('orders', $orders);
    }
    public function subscriberslist()
    {
        $subscribers = Subscription::all();
        return view('admin.subscribers-list')->with('subscribers', $subscribers);
    }
}
