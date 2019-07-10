<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Mail\RegisterEmail;
use app\Admin;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'confirmed'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => 'required|numeric|digits_between:10,13',
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $RegistrationData = new \stdClass();
        $RegistrationData->name = $data['name'];
        $RegistrationData->email = $data['email'];
        $RegistrationData->surname = $data['surname'];
        $RegistrationData->phone = $data['phone'];
        Mail::to("gaurav.vintagecoders@gmail.com")->send(new RegisterEmail($RegistrationData));

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'surname' => $data['surname'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'address_1' => '',
            'address_2' => '',
            'city' => '',
            'zipcode' => ''
        ]);

        return $user;
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return $this->registered($request, $user) ?: redirect($this->redirectPath());
    }
}
