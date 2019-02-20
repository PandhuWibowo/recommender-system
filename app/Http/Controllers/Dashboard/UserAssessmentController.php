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
    $id     = $request->id;
    $status = $request->status;
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
    $id     = $request->id;
    $status = $request->status;
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

  public function store(Request $request){
    $userId     = $request->user_id;
    $jenisAss   = $request->assesment_id;
    $maxAttempt = $request->maxattempt;

    $rules = array(
      'user_id'           => 'required',
      'assesment_id'      => 'required',
      'maxattempt'        => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return response()->json(
        array(
          ""
        )
      );
        exit();
    }
    else{
      for($i=0;$i<count($userId);$i++){
        for($j=0;$j<count($jenisAss);$j++){
          $userAssessments = new UserAssessment([
            'id'                => Uuid::generate()->string,
            'user_id'           => $userId[$i],
            'assesment_id'      => $jenisAss[$j],
            'maxattempt'        => $maxAttempt,
            'status'            => 0,
            'attempt'           => 0
          ]);
          $userAssessments->save();
        }
      }

      return response()->json(
        array(
          "response" => "success"
        )
      );
    }
  }

  public function update(Request $request){
    $id           = $request->id;
    $userId       = $request->user_id;
    $assesmentId  = $request->assesment_id;
    $maxAttempt   = $request->maxattempt;

    $userAssessments                = UserAssessment::find($id);
    $userAssessments->user_id       = $userId;
    $userAssessments->assesment_id  = $assesmentId;
    $userAssessments->maxAttempt    = $maxAttempt;

    if($userAssessments->save()){
      return response()->json(
        array(
          "response"  => "success"
        )
      );
    }
  }

}
