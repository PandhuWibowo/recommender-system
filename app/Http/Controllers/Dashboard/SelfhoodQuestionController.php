<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\JenisAssesment;
use App\Http\Models\SelfhoodJawaban;
use App\Http\Models\SelfhoodPertanyaan;
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
