<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\JenisAssesment;
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
use App\Http\Models\ModelLogs\Answer;
use BrowserDetect;

/**
 * PersonalityController
 */
class PersonalityController extends Controller
{
  public function index(){
    $jenisAssessments   = JenisAssesment::select("id","nama")
                                      ->orderBy("nama","asc")
                                      ->get();
    $personalities      = Personality::all();
    return view("administrator.dashboard.pages.kepribadian.v_index", compact("jenisAssessments","personalities"));
  }

  public function store(){

  }

  public function update(){

  }

  public function destroy(){

  }
}
