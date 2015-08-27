<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Identitas;
use Auth;

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
        if(!empty(Identitas::whereuser_id(Auth::user()->id)->first())){
            return redirect('pertanyaan?page=1');
        }
        return view('page.isi_data');

    }        
    public function isidata(Requests\IsiDataRequest $request)
    {
        $isidata = Identitas::firstOrCreate(['user_id' => Auth::user()->id]); //ingat firstOrCrate pakainya array()

        $isidata->progli    = $request->input('progli');
        $isidata->sekolah   = $request->input('sekolah');
        $isidata->nss       = $request->input('nss');
        $isidata->alamat    = $request->input('alamat');
        $isidata->kec       = $request->input('kec');
        $isidata->kab       = $request->input('kab');
        $isidata->provinsi  = $request->input('provinsi');
        $isidata->kodepos   = $request->input('kodepos');
        $isidata->telp      = $request->input('telp');
        $isidata->email     = $request->input('email');
        $isidata->status    = $request->input('status');
        $isidata->yayasan   = $request->input('yayasan');
        $isidata->akte      = $request->input('akte');
        $isidata->tahunb    = $request->input('tahunb');
        $isidata->statusa   = $request->input('statusa');
        $isidata->visi      = $request->input('visi');
        $isidata->misi      = $request->input('misi');
        $isidata->tujuans   = $request->input('tujuans');
        $isidata->tujuanp   = $request->input('tujuanp');
        $isidata->save();
        return redirect('pertanyaan?page=1');
        
    }    
    public function editdata()
    {
        $user['dataUser'] = Identitas::whereuser_id(Auth::user()->id)->first();
        return view('page.edit_isi_data', $user);
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
