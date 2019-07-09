<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'email' => '',
            'name' => '',
            'phone' => '',
            'address_1' => '',
            'address_2' => '',
            'city' => '',
            'zipcode' => ''
        ]);

        $user->name = request('name');
        $user->phone = request('phone');
        $user->address_1 = request('address_1');
        $user->address_2 = request('address_2');
        $user->city = request('city');
        $user->zipcode = request('zipcode');
        $user->save();

        return back();
    }
}
