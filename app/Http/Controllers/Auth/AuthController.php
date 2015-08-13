<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use Request;
use App\Http\Requests;
use app\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'username' => 'required|max:1',
    //         'password' => 'required|confirmed|min:6',
    //         ]);
    // }

    public function getLogin(){

        return view('page.login');
    }

    public function postLogin(Request $request)
    {
        return redirect('home');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'username' => $data['name'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }
}
