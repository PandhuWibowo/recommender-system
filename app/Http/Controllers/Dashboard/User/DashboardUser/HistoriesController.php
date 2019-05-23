<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\Assesment;
use App\Http\Models\KeteranganNilai;
use App\Http\Models\HasilAssKom;
use App\Http\Models\HasilKompetensi;
use App\Http\Models\PertanyaanAssesment;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;
use PDF;
/**
 * HistoriesController
 */
class HistoriesController extends Controller
{
  public function index(Request $request){
    $histories = Assesment::with("get_jenis_assessment")->where("user_id", Session::get("id"))->get();
    return view("partisipan.dashboard.logtest.v_index", compact("histories"));
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

    return view("partisipan.dashboard.logtest.v_detail", compact("sql","rangeScore","id"));

  }

  public function printPdf($id, Request $request){
    $decryptAssId = Crypt::decrypt($id);

    $resultAssKom = AssessmentKompetensi::where("ass_id", $decryptAssId)->get();

    $rangeScore = KeteranganNilai::orderBy("range_score")->get();



    $cetakHasilAsskomsKekuatan = HasilAssKom::join("keteranganhasils as kh","hasil_nilai_asskoms.keteranganhasil_id","=","kh.id")
                                    ->join("assesment_kompetensis as ak","hasil_nilai_asskoms.asskom_id","=","ak.id")
                                    ->join("keterangan_nilais as kn","kh.keterangan_id","=","kn.id")
                                    ->where("ak.ass_id", $decryptAssId)
                                    ->whereIn("range_score",["3","4"])
                                    ->get();

    $cetakHasilAsskomsPengembangan = HasilAssKom::join("keteranganhasils as kh","hasil_nilai_asskoms.keteranganhasil_id","=","kh.id")
                                    ->join("assesment_kompetensis as ak","hasil_nilai_asskoms.asskom_id","=","ak.id")
                                    ->join("keterangan_nilais as kn","kh.keterangan_id","=","kn.id")
                                    ->where("ak.ass_id", $decryptAssId)
                                    ->whereIn("range_score",["1","2"])
                                    ->get();

    $cetakSaran = HasilAssKom::join("keteranganhasils as kh","hasil_nilai_asskoms.keteranganhasil_id","=","kh.id")
                                    ->join("assesment_kompetensis as ak","hasil_nilai_asskoms.asskom_id","=","ak.id")
                                    ->join("keterangan_nilais as kn","kh.keterangan_id","=","kn.id")
                                    ->join("kompetensis as k","kh.kompetensi_id","=","k.id")
                                    ->where("ak.ass_id", $decryptAssId)
                                    ->whereIn("range_score",["1","2"])
                                    ->orderByDesc("pembulatan")
                                    ->get();

    $dataUser = Assesment::with('get_user')->with("get_jenis_assessment")
                          ->where("id", $decryptAssId)->limit(1)->get();

    $pdf = PDF::loadView('partisipan.dashboard.report.v_print', compact("dataUser","cetakSaran","resultAssKom","rangeScore","cetakHasilAsskomsPengembangan","cetakHasilAsskomsKekuatan","id"))->setPaper('a4', 'portrait');
    // $pdf->render();

    return $pdf->stream();
  }
}
