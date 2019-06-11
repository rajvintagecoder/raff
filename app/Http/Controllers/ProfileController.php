<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Profile;
use DB;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('profile')->with("user",$user);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(4);
        //$user = auth()->user();
        // dd(request()->all());

        try{
            //dd(request()->all());
            $data = $request->validate([
                'first_name' => 'required',
                'phone' => 'required',
                'address_line_1' => '',
                'address_line_2' => '',
                'city' => '',
                'postcode' => '',
            ]);
            $user->name = $data['first_name'];
            $user->phone = $data['phone'];
            $user->address_line_1 = $data['address_line_1'];
            $user->address_line_2 = $data['address_line_2'];
            $user->city = $data['city'];
            $user->postcode = $data['postcode'];
            $user->save();
         }
         catch(\Exception $e){
            // do task when error
            echo $e->getMessage();   // insert query
         }

        // echo DB::enableQueryLog();
        // die;
        return redirect('/profile')->with('success', 'User has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
