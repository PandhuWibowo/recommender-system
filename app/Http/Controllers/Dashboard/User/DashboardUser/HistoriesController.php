<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\Assesment;
use App\Http\Models\AssessmentKompetensi;
use App\Http\Models\RowScore;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;

/**
 * HistoriesController
 */
class HistoriesController extends Controller
{
  public function index(){
    $histories = Assesment::where("user_id", Session::get("id"))->get();
    return view("partisipan.dashboard.logtest.v_index", compact("histories"));
  }

  public function show($id){
    $decryptAssId = Crypt::decrypt($id);

    $query  = DB::table("pertanyaan_assesments as pa")
                ->select("k.id as kId","r.id as rId","r.nama_rowscore as namaRowScore","k.kompetensi as kKompetensi",DB::raw("SUM(pa.nilai) as sum_nilai"))
                ->join("pertanyaans as p","pa.pertanyaan_id","=","p.id")
                ->join("jawabans as j","pa.jawaban_id","=","j.id")
                ->join("rowscores as r","p.rowscore_id","=","r.id")
                ->join("kompetensis as k","p.kompetensi_id","=","k.id")
                ->where("pa.ass_id", $decryptAssId)
                ->where("r.nama_rowscore","Self Assessment")
                ->groupBy("r.no_urut_rowscore","k.no_urut_kompetensi")
                ->get();

    $query2   = DB::table("pertanyaan_assesments as pa")
              ->select("k.id as kId","r.id as rId","r.nama_rowscore as namaRowScore","k.kompetensi as kKompetensi",DB::raw("SUM(pa.nilai) as sum_nilai"))
              ->join("pertanyaans as p","pa.pertanyaan_id","=","p.id")
              ->join("jawabans as j","pa.jawaban_id","=","j.id")
              ->join("rowscores as r","p.rowscore_id","=","r.id")
              ->join("kompetensis as k","p.kompetensi_id","=","k.id")
              ->where("pa.ass_id", $decryptAssId)
              ->where("r.nama_rowscore","SJQ")
              ->groupBy("r.no_urut_rowscore","k.no_urut_kompetensi")
              ->get();

    return view("partisipan.dashboard.logtest.v_detail", compact("query","query2"));

  }
}