<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.login');
    }

    public function login()
    {
        $rules = array(
                'username' => 'required',
                'password' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()){
            return redirect('login')
                ->withError
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
