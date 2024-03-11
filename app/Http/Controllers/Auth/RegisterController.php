<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

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
    protected $redirectTo = RouteServiceProvider::USER_DASHBOARD;

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
            'firstName'         => 'required|string:max:255',
            'lastName'          => 'required|string:max:255',
            'email'             => 'required|email|unique:users',
            'aadhar_number'     => 'required|unique:users|max:12',
            'dob'               => 'required',
            'password'          => 'required|min:8|confirmed',
            'gender'            => ['required',Rule::in(["male", "female","other"])]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

       $data = DB::transaction(function ()  use($data) {
            $user =  User::create([
                'first_name'     => $data['firstName'],
                'last_name'      => $data['lastName'],
                'email'          => $data['email'],
                'aadhar_number'  => $data['aadhar_number'],
                'dob'            => $data['dob'],
                'password'       => Hash::make($data['password']),
                'gender'         => $data['gender']
            ]);
    
            $user->assignRole('user');
            return $user;
        });

        return $data;
    }
}
