<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('page.home');
    }

    public function isidata()
    {
        return view('page.isidata');
    }    
    public function newpass()
    {
        return view('page.change_password');
    }    
    public function asesor()
    {
        return view('page.asesor');
    }    
    public function lihathasil()
    {
        return view('page.lihathasil');
    }    
    public function user()
    {
        return view('page.user_list');
    }
}
