<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pertanyaan;
use App\Jawaban;
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

        if(!empty($db->jawaban)){
            $jawaban = json_decode($db->jawaban, true);
            if(!empty($jawaban[$_GET['page']])){
                $jwb = $jawaban[$_GET['page']];
            }
        }
        $data['pertanyaan'] = Pertanyaan::paginate(1);
        $data['pertanyaan']->setPath(url('/pertanyaan'));
        $data['jawaban'] = $jwb;
        return view('page.pertanyaan', $data);
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

        

        //Handling upload
        //ambil file dari input
        //move ke public
        //ambil url yng ada di public

        $jawaban['file'] = $urlfile;

        if(!empty($jawaban['jawaban'])){
            $dbJawaban = Jawaban::firstOrCreate(array("user_id" => Auth::user()->id));

            $extJawaban = [];
            if(!empty($dbJawaban->jawaban)){
                $extJawaban = json_decode($dbJawaban->jawaban, true);    
            }

            $extJawaban[$jawaban['no']] = $jawaban;

            $dbJawaban->jawaban = json_encode($extJawaban);
            $dbJawaban->save();
        }
        
        return redirect('/pertanyaan?page='.$rq->input('page'));
    }

}
