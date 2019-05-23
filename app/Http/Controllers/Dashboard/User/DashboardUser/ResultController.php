<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
// use App\Http\Models\User;
use App\Http\Models\HasilKompetensi;
use App\Http\Models\AssessmentKompetensi;
use App\Http\Models\Assesment;
use App\Http\Models\KeteranganNilai;
use App\Http\Models\HasilAssKom;
use App\Http\Models\PertanyaanAssesment;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;
/**
 * ResultController
 */
class ResultController extends Controller
{
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

    // TODO: Menampilkan nilai dari table keterangan_nilais dengan detail_kompetensis_keterangan_nilais
    $query      = KeteranganNilai::select("dkkn.keterangan_nilai_id as dkknKeteranganNilaiId","keterangan_nilais.range_score as knRangeScore","dkkn.kompetensi_id as dkknKompetensiId")
                                  ->join("detail_kompetensis_keterangan_nilais as dkkn","keterangan_nilais.id","=","dkkn.keterangan_nilai_id")
                                  ->get();

    if(count($sql) > 0){

    }else{
      foreach($sql as $r1){
        foreach($query as $r2){
          if($r1->pKomId == $r2->dkknKompetensiId && $r1->dpaNilai == $r2->knRangeScore){
            $detailHasils = new HasilAssKom([
              "keterangan_nilai_id" => $r2->dkknKeteranganNilaiId,
              "kompetensi_id"       => $r2->dkknKompetensiId,
              "pertanyaan_id"       => $r1->dpaPertanyaanId,
              "assessment_id"       => $r1->dpaAssessmentId
            ]);
            $detailHasils->save();
          }
        }
      }
    }

    // TODO: Menampilkan bagian area kekuatan dan area pengembangan

      //TODO: a. Menampilkan bagian area kekuatan

      //TODO: b. Menampilkan bagian area pengembangan

    return view("partisipan.dashboard.result.v_index", compact("sql","rangeScore","id"));
  }
}
