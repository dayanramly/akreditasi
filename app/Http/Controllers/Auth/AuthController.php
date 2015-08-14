<?php namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Request;

use App\Http\Requests;
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

    public function getLogin(){
        return view('page.login');
    }

    public function postLogin(Requests\LoginRequest $request)
    {
        $credentials = $request->only('uname', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->intended('/');
        }
        return redirect('/auth/login');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }

}
