<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\JenisAssesment;
use App\Http\Models\Assesment;
use App\Http\Models\Pertanyaan;
use App\Http\Models\SelfhoodPertanyaan;
use App\Http\Models\UserAssessment;
use App\Http\Models\Configuration;
use App\Http\Models\ConfigurationTwo;
use App\Http\Models\Kompetensi;
use App\Http\Models\PertanyaanAssesment;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
/**
 * UserController
 */
class AssesmentController extends Controller
{
  public function index(Request $request){
    $jenisAssesment   = UserAssessment::join("jenis_assessments as ja","detail_users_jenis_assessments.jenis_assessment_id","=","ja.id")
                                      ->where("detail_users_jenis_assessments.user_id", Session::get('id'))
                                      ->where("status", 0)
                                      ->get();
    $countAssessment = count($jenisAssesment);

    return view("partisipan.dashboard.assesment.v_assesment", compact("jenisAssesment","countAssessment"));
  }

  public function store(Request $request){
    $assesment = new Assesment([
      'id'                    => Uuid::generate()->string,
      'user_id'               => Session::get("id"),
      'jenis_assessment_id'   => Crypt::decrypt($request->jenis_assessment_id)
    ]);

    if($assesment->save()){
      $tampilAttempt = UserAssessment::select(["attempt"])->where("user_id", Session::get("id"))
                                    ->where("jenis_assessment_id", Crypt::decrypt($request->jenis_assessment_id))
                                    ->first()->attempt;

      $countAttempt = $tampilAttempt;

      $attemptUpdate = UserAssessment::where("user_id", Session::get("id"))
                                    ->where("jenis_assessment_id", Crypt::decrypt($request->jenis_assessment_id))
                                    ->update(["attempt" => $countAttempt+1]);
      return response()->json(
          array(
            'response'            => "success",
            'jenis_assessment_id' => $request->jenis_assessment_id,
            'assessment_id'       => Crypt::encrypt($assesment->id)
          )
      );
    }else{
      return response()->json(
          array(
            'response'  => "failed"
          )
      );
    }
  }

  public function show($varJenisAssessmentId, $varAssessmentId, Request $request){
    $decryptJenisAssessmentId     = Crypt::decrypt($varJenisAssessmentId); //TODO: Jenis Assessment ID
    $decryptAssessmentId          = Crypt::decrypt($varAssessmentId); //TODO: Assessment ID

    $tablePertanyaan1 = Pertanyaan::where("jenis_assessment_id", $decryptJenisAssessmentId)->count();

    if($tablePertanyaan1 > 0){

      $questions    = Pertanyaan::where("jenis_assessment_id", $decryptJenisAssessmentId)
                                ->get();
      $countQuestions = count($questions);

      $hasilJawaban = PertanyaanAssesment::where("assessment_id", $decryptAssessmentId)->pluck("jawaban_id");
      // dd($hasilJawaban);

      //Penentuan Assessment
      $competencyType = Pertanyaan::where("jenis_assessment_id", $decryptJenisAssessmentId)
                                  ->join("jenis_assessments as ja","pertanyaans.jenis_assessment_id","=","ja.id")
                                  ->pluck("ja.nama")
                                  ->first();

      return view("partisipan.dashboard.assesment.v_question", compact("hasilJawaban","questions","decryptAssessmentId","decryptJenisAssessmentId", "countQuestions","competencyType"));

    }
    else{
      echo noticePage();
    }
  }

  public function noticePage(){
    echo "Nothing happened here";
  }
}
