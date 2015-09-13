<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Identitas;
use App\Jawaban;
use Auth;
use DB;

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
        $user['dataUser'] = Identitas::whereuser_id(Auth::user()->id)->first();
        $user['jawaban'] = Jawaban::whereuser_id(Auth::user()->id)->first();
        return view('page.home', $user);
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
        $asesor = DB::table('user')
        ->join('jawaban','user.id','=','jawaban.user_id')
        ->join('identitas','user.id','=','identitas.user_id')
        ->select('user.*', 'jawaban.*', 'identitas.*')
        ->where('user.group_id','=','3')
        ->get();
        $data['dataUser'] = $asesor;
        return view('page.asesor',$data);
    }    
    public function lihathasil()
    {
        $data['hasil'] = Jawaban::whereuser_id(Auth::user()->id)->first();
        $data['identitas'] = Identitas::whereuser_id(Auth::user()->id)->first();
        return view('page.lihathasil',$data);
    }       
    public function asesorhasil($id)
    {
        $data['hasil'] = Jawaban::whereuser_id($id)->first();
        $data['identitas'] = Identitas::whereuser_id($id)->first();
        $data['jawaban'] = Jawaban::whereuser_id($id)->first();
        return view('page.asesorhasil',$data);
    }      
    public function updatehasil(Requests\IsiDataRequest $request, $id)
    {
        $hasil= Jawaban::whereuser_id($id)->first();
        // echo $hasil;
        // die();
        $inp = $request->input('updatehasil');
        $hasil->selesai = $inp;
        $hasil->save();
        return redirect('/asesor');
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

        if($groupid===3){
            return redirect('/');
            
        }
        else{
            return redirect('user/'.$groupid);
        }

    }
}
