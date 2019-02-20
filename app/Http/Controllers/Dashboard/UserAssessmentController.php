<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\JenisAssesment;
use App\Http\Models\UserAssessment;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

class UserAssessmentController extends Controller{

  public function index(){
    $users            = User::all();
    $jenisAssessments = JenisAssesment::all();
    $userAssessments  = UserAssessment::all();
    return view("administrator/dashboard/pages/user-jenisassessment/v_index", compact("users","jenisAssessments","userAssessments"));
  }

  public function updateStatusEnable(Request $request){
    $id     = trim($request->id);
    $status = trim($request->status);
    for($i=0;$i<count($id);$i++){
      $userAssessments  = UserAssessment::find(trim($request->id[$i]));
      $userAssessments->status  = trim($request->status[$i]);
      $userAssessments->save();
    }
    return response()->json(
      array(
        "response"  => "success"
      )
    );
  }

  public function updateStatusDisable(Request $request){
    $id     = trim($request->id);
    $status = trim($request->status);
    for($i=0;$i<count($id);$i++){
      $userAssessments  = UserAssessment::find(trim($request->id[$i]));
      $userAssessments->status  = trim($request->status[$i]);
      $userAssessments->save();
    }
    return response()->json(
      array(
        "response"  => "success"
      )
    );
  }

}
