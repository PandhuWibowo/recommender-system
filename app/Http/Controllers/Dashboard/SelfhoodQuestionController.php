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
    $jenisAssessments  = JenisAssesment::orderBy("created_at","asc")->get();
    $persons          = Personality::orderBy("created_at","asc")->get();
    return view("administrator.dashboard.pages.pertanyaan-kepribadian-page.v_index", compact("jenisAssessments","persons"));
  }

  public function show($assessmentId, $kepribadianId, $pertanyaanKepribadianId){

  }

  public function add(){

  }

  public function store(Request $request){

  }

  public function update(Request $request){

  }

  public function destroy(Request $request){

  }
}
