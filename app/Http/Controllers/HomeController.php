<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

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
        return view('page.isi_data');
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
        $data['userAll'] = User::all();
        return view('page.user_list', $data);
    }    
    public function userEdit($id)
    {
        $users              = User::find($id);
        $users->uname       = $request->input('uname');
        $users->password    = $request->input('password');
        $users->group_id    = $request->input('group_id');
        $users->save();

        // return view('page.edit_user', $data);
        return redirect('user');
    }
}
