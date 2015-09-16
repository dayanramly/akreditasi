<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pertanyaan;
use App\Jawaban;
use App\Identitas;
use Auth;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $db = Jawaban::whereuser_id(Auth::user()->id)->first();
        $jwb = "";

        $ident = Identitas::whereuser_id(Auth::user()->id)->first();
        $identitas = "";
        if(!empty($ident)){
            $identitas = $ident;
        }

        if(!empty($db->jawaban)){
            $jawaban = json_decode($db->jawaban, true);
            if(!empty($jawaban[$_GET['page']])){
                $jwb = $jawaban[$_GET['page']];
            }
        }else{
            $jwb="";
        }
        $data['pertanyaan'] = Pertanyaan::paginate(1);
        $data['pertanyaan']->setPath(url('/pertanyaan'));
        $data['jawaban'] = $jwb;
        $data['identitas'] = $identitas;
        return view('page.pertanyaan', $data);
    }    
    public function lihathasil($id)
    {
        $db = Jawaban::whereuser_id($id)->first();

        $jwb = "";

        if(!empty($db->jawaban)){
            $jawaban = json_decode($db->jawaban, true);
            if(!empty($jawaban[$_GET['page']])){
                $jwb = $jawaban[$_GET['page']];
            }
        }else{
            $jwb="";
        }
        // print_r($jwb);
        // die();

        $data['pertanyaan'] = Pertanyaan::paginate(1);
        $data['pertanyaan']->setPath(url('/pertanyaan/'.$id));
        $data['jawaban'] = $jwb;
        $data['id'] = $id;
        return view('page.hasil_jawaban', $data);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function simpan(Requests\IsiDataRequest $rq)
    {

        $jawaban = $rq->input('f');
        $file = $rq->file('f.file');

        if(!empty($file)){
            $filename = 'upload_'.$file->getClientOriginalName();
            // $exists = Storage::disk('local')->exists($filename);
            Storage::disk('local')->put($filename, file_get_contents($file->getRealPath()));
            $urlfile = '/upload/'.$filename;
            $jawaban['file'] = $urlfile;
        }


        if(!empty($jawaban['jawaban'])){
            $dbJawaban = Jawaban::firstOrCreate(array("user_id" => Auth::user()->id));

            $extJawaban = [];
            if(!empty($dbJawaban->jawaban)){
                $extJawaban = json_decode($dbJawaban->jawaban, true);    
            }

            if(!empty($extJawaban[$jawaban['no']]["file"]) && empty($jawaban['file'])){
                $jawaban['file'] = $extJawaban[$jawaban['no']]["file"];
            }
            $extJawaban[$jawaban['no']] = $jawaban;

            $dbJawaban->jawaban = json_encode($extJawaban);
            $dbJawaban->save();
        }
        
        return redirect('/pertanyaan?page='.$rq->input('page'));
    }

}
