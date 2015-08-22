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

    public function formdata()
    {
        return view('page.isi_data');
    }        
    public function isidata()
    {
        
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
    public function user($id)
    {
        $data['userAll'] = User::all();
        $data['idAll'] = $id;
        return view('page.user_list', $data);
    }    
    public function formEdit($id)
    {
        $user['dataUser'] = User::find($id);
        return view('page.edit_user', $user);
    }    

    //edit user yang login sendiri
    public function userEdit(Requests\UserRequest $request, $id, $groupid)
    {
        $users              = User::find($id);
        $users->uname       = $request->input('uname');
        $password           = $request->input('password');
        if (!empty($password)){
            $users->password    = bcrypt($password);
        }
        $users->save();

        if($groupid!=1){
            return redirect('user/'.$groupid);
        }
        else{
            return redirect('/');
        }

    }
}
