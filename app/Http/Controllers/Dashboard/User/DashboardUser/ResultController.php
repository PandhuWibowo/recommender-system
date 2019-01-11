<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
// use App\Http\Models\User;
// use App\Http\Models\JenisAssesment;
// use App\Http\Models\Assesment;
use App\Http\Models\RowScore;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;
/**
 *
 */
class ResultController extends Controller
{
  public function show($assId){
    $assId  = Crypt::decrypt($assId);
    $query  = DB::table("pertanyaan_assesments as pa")
                ->select("r.id as rId","r.nama_rowscore as namaRowScore","k.kompetensi as kKompetensi",DB::raw("SUM(pa.nilai) as sum_nilai"))
                ->join("pertanyaans as p","pa.pertanyaan_id","=","p.id")
                ->join("jawabans as j","pa.jawaban_id","=","j.id")
                ->join("rowscores as r","p.rowscore_id","=","r.id")
                ->join("kompetensis as k","p.kompetensi_id","=","k.id")
                ->where("pa.ass_id", $assId)
                ->where("r.nama_rowscore","Self Assessment")
                ->groupBy("r.no_urut_rowscore","k.no_urut_kompetensi")
                ->get();
  $query2   = DB::table("pertanyaan_assesments as pa")
              ->select("r.id as rId","r.nama_rowscore as namaRowScore","k.kompetensi as kKompetensi",DB::raw("SUM(pa.nilai) as sum_nilai"))
              ->join("pertanyaans as p","pa.pertanyaan_id","=","p.id")
              ->join("jawabans as j","pa.jawaban_id","=","j.id")
              ->join("rowscores as r","p.rowscore_id","=","r.id")
              ->join("kompetensis as k","p.kompetensi_id","=","k.id")
              ->where("pa.ass_id", $assId)
              ->where("r.nama_rowscore","SJQ")
              ->groupBy("r.no_urut_rowscore","k.no_urut_kompetensi")
              ->get();


    $rowscores = RowScore::all();
    return view("partisipan.dashboard.result.v_index", compact("query","rowscores","query2"));
  }
}
