<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\JenisAssesment;
use App\Http\Models\SelfhoodJawaban;
use App\Http\Models\SelfhoodPertanyaan;
use App\Http\Models\Personality;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use DB;
use App\Http\Models\ModelLogs\DirectPage;
use BrowserDetect;

/**
 * SelfhoodQuestionController
 */
class SelfhoodQuestionController extends Controller
{
  public function index(){
    $questions = SelfhoodPertanyaan::with("getJawabans")->orderBy("no_urut_pertanyaan","asc")->get();

    return view("administrator.dashboard.pages.pertanyaan-kepribadian-page.v_index", compact("questions"));
  }

  public function edit($assessmentId, $pertanyaanKepribadianId){
    $decryptAssessmentId            = Crypt::decrypt($assessmentId);
    $decryptPertanyaanKepribadianId = Crypt::decrypt($pertanyaanKepribadianId);
    $jenisAssessments               = JenisAssesment::orderBy("created_at","asc")->get();
    $persons                        = Personality::orderBy("created_at","asc")->get();
    $editSoal                       = SelfhoodPertanyaan::join("jawaban_kepribadians as jk","pertanyaan_kepribadians.id","=","jk.selfhood_pertanyaan_id")
                                                        ->where("id", $decryptPertanyaanKepribadianId)
                                                        ->where("pertanyaan_kepribadians.assessment_id", $decryptAssessmentId)
                                                        ->first();
    // dd($editSoal);
    $jenisKepByAssId                = Personality::where("assessment_id", $decryptAssessmentId)->get();

    // dd($jenisKepByAssId);
    return view("administrator.dashboard.pages.pertanyaan-kepribadian-page.detail.v_view-update", compact("jenisAssessments","persons","questions","assessmentId","pertanyaanKepribadianId","editSoal","jenisKepByAssId"));
  }

  public function add(){
    $jenisAssessments = JenisAssesment::orderBy("created_at","asc")->get(); //TODO: mengeluarkan jenis assessment
    $persons          = Personality::orderBy("created_at","asc")->get(); //TODO: mengeluarkan personality
    $queryNoUrut      = SelfhoodPertanyaan::select("no_urut_pertanyaan")->where("assessment_id", Session::get("assessment_id"))->get(); //TODO: membuat nomor urut

    if(count($queryNoUrut) == 0){
      $kasihNomorUrut = 1;
    }
    else{
      $arrNoUrutTerakhir= $queryNoUrut->toArray();

      $maxNoUrutTerakhir= max($arrNoUrutTerakhir);
      $kasihNomorUrut = $maxNoUrutTerakhir+1;
    }

    return view("administrator.dashboard.pages.pertanyaan-kepribadian-page.v_view-add", compact("jenisAssessments","persons","questions","kasihNomorUrut"));
  }

  // TODO: filtering assessment_id untuk kepribadian_id
  public function filterKepribadian(Request $request){
    $assId        = Crypt::decrypt($request->id);
    $kepribadians  = Personality::where("assessment_id", $assId)->orderBy("nama","asc")->get();
    foreach ($kepribadians as $key => $value) {
      $output = '<option value="'.Crypt::encrypt($value->id).'">'.$value->nama.'</option>';
      echo $output;
    }
  }

  public function store(Request $request){
    $rules = array(
      'kepribadian_id'    => 'required',
      'assesment_id'      => 'required',
      'no_urut_pertanyaan'=> 'required',
      'opsi_jawaban'      => 'required',
      'code_opsi_jawaban' => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('backend/pages/selfhood/questions')
        ->withErrors($validator);
        exit();
    }
    else{
      Session::put('assesment_id', $request->assesment_id);
      $pertanyaan = new SelfhoodPertanyaan([
        'id'                => Uuid::generate()->string,
        // 'nama'              => ucfirst(trim($request->nama)),
        'assessment_id'     => trim(Crypt::decrypt($request->assesment_id)),
        // 'kode_nama'         => ucfirst(trim($request->kode_nama)),
        'no_urut_pertanyaan'=> trim($request->no_urut_pertanyaan)
      ]);
      $pertanyaan->save();

      $pertanyaan->id;

      for($i=0;$i<count($request->opsi_jawaban);$i++){
        if($request->opsi_jawaban[$i] == "" && $request->code_opsi_jawaban[$i] == ""){
          continue;
        }else{
          $queryNoUrut      = SelfhoodJawaban::select("no_urut_jawaban_kepribadian")->where("assessment_id", Session::get("assessment_id"))->get(); //TODO: membuat nomor urut

          if(count($queryNoUrut) == 0){
            $kasihNomorUrut = 1;
          }
          else{
            $arrNoUrutTerakhir= $queryNoUrut->toArray();

            $maxNoUrutTerakhir= max($arrNoUrutTerakhir);
            $kasihNomorUrut = $maxNoUrutTerakhir+1;
          }

          $jawaban  = new SelfhoodJawaban([
            // 'id'                => Uuid::generate()->string,
            'kepribadian_id'              => Crypt::decrypt($request->kepribadian_id[$i]),
            'selfhood_pertanyaan_id'      => $pertanyaan->id,
            'assessment_id'               => trim(Crypt::decrypt($request->assesment_id)),
            'opsi_jawaban'                => $request->opsi_jawaban[$i],
            'code_opsi_jawaban'           => $request->code_opsi_jawaban[$i],
            'no_urut_jawaban_kepribadian' => $kasihNomorUrut+$i
          ]);

          $jawaban->save();
        }
      }

      // $logPages = new Question([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Store Pertanyaan - Store|Success",
      //   "data"        => "Berhasil menyimpan pertanyaan baru",
      //   "link"        => url()->current()
      // ]);
      //
      // $logPages->save();

      Session::flash("success","Your question has been saved");
      return Redirect::to('backend/pages/selfhood/questions');
    }
  }

  public function update(Request $request){

  }

  public function destroy(Request $request){

  }
}
