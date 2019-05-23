<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\Assesment;
use App\Http\Models\KeteranganNilai;
use App\Http\Models\PertanyaanAssesment;
use App\Http\Models\Kompetensi;
use App\Http\Models\HasilAssKom;
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
  public function index(Request $request){
    $histories = Assesment::where("selesai","1")->get();
    return view("administrator.dashboard.pages.logtest.v_index", compact("histories"));
  }

  public function show($id, Request $request){

    $assessmentId  = Crypt::decrypt($id);

    // TODO: Menampilkan Nilai Jawaban dan Kompetensi Berdasarkan Assessment ID
    $sql        = PertanyaanAssesment::where("assessment_id", $assessmentId)
                                      ->select("k.kompetensi as kKom","detail_pertanyaans_assessments.nilai as dpaNilai","detail_pertanyaans_assessments.pertanyaan_id as dpaPertanyaanId","detail_pertanyaans_assessments.assessment_id as dpaAssessmentId","p.kompetensi_id as pKomId")
                                      ->join("pertanyaans as p","p.id","=","detail_pertanyaans_assessments.pertanyaan_id")
                                      ->join("kompetensis as k","k.id","=","p.kompetensi_id")
                                      ->get();


    // TODO: Menampilkan keterangan bobot nilai
    $rangeScore = KeteranganNilai::orderBy("range_score")->get();

    return view("administrator.dashboard.pages.logtest.v_detail", compact("sql","rangeScore","id"));
  }
}
