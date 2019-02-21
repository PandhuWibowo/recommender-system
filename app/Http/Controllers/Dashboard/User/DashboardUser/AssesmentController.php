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
use App\Http\Models\UserAssessment;
use App\Http\Models\Configuration;
use App\Http\Models\Kompetensi;
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
  public function index(){
    $jenisAssesment   = UserAssessment::join("jenis_assesments as ja","user_assesments.assesment_id","=","ja.id")
                                      ->where("user_assesments.user_id", Session::get('id'))
                                      ->where("status", 0)
                                      ->get();
    $countAssessment = count($jenisAssesment);

    return view("partisipan.dashboard.assesment.v_assesment", compact("jenisAssesment","countAssessment"));
  }

  public function store(Request $request){
    $assesment = new Assesment([
      'id'            => Uuid::generate()->string,
      'user_id'       => Session::get("id"),
      'tanggal_akses' => Carbon::now()->format('Y-m-d')
    ]);
    $assesment->save();

    $tampilAttempt = UserAssessment::select(["attempt"])->where("user_id", Session::get("id"))
                                  ->where("assesment_id", Crypt::decrypt($request->id))
                                  ->first()->attempt;

    $countAttempt = $tampilAttempt;

    $attemptUpdate = UserAssessment::where("user_id", Session::get("id"))
                                  ->where("assesment_id", Crypt::decrypt($request->id))
                                  ->update(["attempt" => $countAttempt+1]);
    return response()->json(
        array(
          'response'  => "success",
          'id'        => $request->id,
          'ass_id'    => Crypt::encrypt($assesment->id)
        )
    );
  }

  public function show($id, $assId){
    $decryptId    = Crypt::decrypt($id);
    $decryptAssId = Crypt::decrypt($assId);

    //Paginate total number
    $limit = Configuration::pluck("konfigurasi")->first();

    $questions    = Pertanyaan::with(['get_rowscore' => function ($q) {
                                  $q->orderBy('no_urut_rowscore', 'desc');
                                }])
                              ->with(['get_kompetensi' => function ($q) {
                                  $q->orderBy('no_urut_kompetensi', 'ASC');
                                }])
                              ->with("get_assesment")
                              ->where("assesment_id", $decryptId)
                              // ->orderBy("rowscores.no_urut_rowscore","asc")
                              ->orderBy("no_urut_pertanyaan","asc")
                              ->get();
    $countQuestions = count($questions);

    //Penentuan Assessment
    $competencyType = Pertanyaan::where("assesment_id", $decryptId)
                                ->join("jenis_assesments as ja","pertanyaans.assesment_id","=","ja.id")
                                ->pluck("ja.nama")
                                ->first();

    //                           // ->sortBy(function($noUrutRowScore) {
    //                           //      return $noUrutRowScore->get_rowscore->no_urut_rowscore;
    //                           // })
    //                           // ->sortBy(function($noUrutKompetensi) {
    //                           //      return $noUrutKompetensi->get_kompetensi->no_urut_kompetensi;
    //                           // });
    //
    //                           // ->orderBy("kompetensis.no_urut_kompetensi","as")
    //                           // ->sortByDesc("rowscores.no_urut_rowscore");
    //
    return view("partisipan.dashboard.assesment.v_question", compact("questions","decryptAssId","countQuestions","competencyType"));
  }
}
