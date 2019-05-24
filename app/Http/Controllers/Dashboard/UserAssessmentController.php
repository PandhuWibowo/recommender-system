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

  public function index(Request $request){
    $users            = User::where("level","Participant")->get();
    $jenisAssessments = JenisAssesment::all();
    $userAssessments  = UserAssessment::all();
    return view("administrator/dashboard/pages/user-jenisassessment/v_index", compact("users","jenisAssessments","userAssessments"));
  }

  public function updateStatusEnable(Request $request){
    $userId             = $request->user_id;
    $jenisAssessmentId  = $request->jenis_assessment_id;
    $status             = $request->status;
    for($i=0;$i<count($userId);$i++){
      $userAssessments  = UserAssessment::where("user_id", trim($request->user_id[$i]))->where("jenis_assessment_id", trim($request->jenis_assessment_id[$i]))->update(['status'=>trim($request->status[$i])]);
    }

    return response()->json(
      array(
        "response"  => "success"
      )
    );
  }

  public function updateStatusDisable(Request $request){
    $userId             = $request->user_id;
    $jenisAssessmentId  = $request->jenis_assessment_id;
    $status             = $request->status;
    for($i=0;$i<count($userId);$i++){
      $userAssessments  = UserAssessment::where("user_id", trim($request->user_id[$i]))->where("jenis_assessment_id", trim($request->jenis_assessment_id[$i]))->update(['status'=>trim($request->status[$i])]);
    }

    return response()->json(
      array(
        "response"  => "success"
      )
    );
  }

  public function store(Request $request){
    $userId     = $request->user_id;
    $jenisAss   = $request->jenis_assessment_id;
    $maxAttempt = $request->maxattempt;

    $rules = array(
      'user_id'             => 'required',
      'jenis_assessment_id' => 'required',
      'maxattempt'          => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $message = $validator->getMessageBag()->toArray();
      if(!empty($message["user_id"])){
        return response()->json(
          array(
            'response'  => "errors",
            'errors' => $message["user_id"]
          )
        );
      }
      elseif (!empty($message["jenis_assessment_id"])) {
        return response()->json(
            array(
              'response'  => "errors",
              'errors' => $message["jenis_assessment_id"]
            )
        );
      }
      elseif (!empty($message["maxattempt"])) {
        return response()->json(
            array(
              'response'  => "errors",
              'errors' => $message["maxattempt"]
            )
        );
      }
    }
    else{
      for($i=0;$i<count($userId);$i++){
        for($j=0;$j<count($jenisAss);$j++){
          $userAssessments = new UserAssessment([
            'user_id'             => $userId[$i],
            'jenis_assessment_id' => $jenisAss[$j],
            'maxattempt'          => $maxAttempt,
            'status'              => intval(0)
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
    $userId       = $request->user_id;
    $assesmentId  = $request->jenis_assessment_id;
    $maxAttempt   = $request->maxattempt;

    if(UserAssessment::where("user_id", $userId)->where("jenis_assessment_id", $assesmentId)->update(['user_id'=>trim($userId), 'jenis_assessment_id'=>trim($assesmentId), 'maxattempt'=>$maxAttempt])){
      return response()->json(
        array(
          "response"  => "success"
        )
      );
    }else{
      return response()->json(
        array(
          "response"  => "failed"
        )
      );
    }
  }

  public function destroy(Request $request){

    if(UserAssessment::where('user_id',trim($request->user_id))->where('jenis_assessment_id', trim($request->jenis_assessment_id))->delete()){
      return response()->json(
        array(
          'response'  => "success"
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

}
