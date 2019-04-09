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
    $questions        = SelfhoodJawaban::all();
    return view("administrator.dashboard.pages.pertanyaan-kepribadian-page.v_index", compact("jenisAssessments","persons","questions"));
  }

  public function view($assessmentId, $kepribadianId, $pertanyaanKepribadianId){
    $jenisAssessments = JenisAssesment::orderBy("created_at","asc")->get();
    $persons          = Personality::orderBy("created_at","asc")->get();
    // $questions        =
    return view("administrator.dashboard.pages.pertanyaan-kepribadian-page.detail.v_view-update", compact("jenisAssessments","persons","questions"));
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

  public function filterKepribadian(Request $request){
    $assId        = Crypt::decrypt($request->id);
    $kepribadians  = Personality::where("assessment_id", $assId)->orderBy("nama","asc")->get();
    foreach ($kepribadians as $key => $value) {
      $output = '<option value="'.Crypt::encrypt($value->id).'">'.$value->nama.'</option>';
      echo $output;
    }
  }

  public function store(Request $request){

  }

  public function update(Request $request){

  }

  public function destroy(Request $request){

  }
}
