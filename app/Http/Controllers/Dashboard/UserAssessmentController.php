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
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\Ua;
use BrowserDetect;

class UserAssessmentController extends Controller{

  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu User Assessment",
      "data"        => Session::get("email")." mengunjungi halaman User Assessment",
      "link"        => url()->current()
    ]);

    $logPages->save();

    $users            = User::where("level","Participant")->get();
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
    $log = new Ua([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Enable Status - Enable|Success",
      "data"        => "Berhasil enable status User Assessment",
      "link"        => url()->current()
    ]);

    $log->save();
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

    $log = new Ua([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Disable Status - Disable|Success",
      "data"        => "Berhasil disable status User Assessment",
      "link"        => url()->current()
    ]);

    $log->save();

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
          "error" => $validator
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

      $log = new Ua([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Store User Assessment - Store|Success",
        "data"        => "Berhasil menyimpan data baru User Assessment",
        "link"        => url()->current()
      ]);

      $log->save();

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
      $log = new Ua([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Update User Assessment - Update|Success",
        "data"        => "Berhasil mengubah data User Assessment - User Assessment ID : ".$request->id.", User ID : ".$request->user_id.", Assessment ID : ".$request->assesment_id.
                          ", Maxattempt : ".$request->maxattempt,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          "response"  => "success"
        )
      );
    }else{
      $log = new Ua([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Update User Assessment - Update|Failed",
        "data"        => "Gagal mengubah data User Assessment - User Assessment ID : ".$request->id.", User ID : ".$request->user_id.", Assessment ID : ".$request->assesment_id.
                          ", Maxattempt : ".$request->maxattempt,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          "response"  => "failed"
        )
      );
    }
  }

  public function destroy(Request $request){
    $txtId    = $request->id;
    $data = UserAssessment::where('id', $txtId)->first();

    if(UserAssessment::where('id',$txtId)->delete()){
      $log = new Ua([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete User Assessment - Delete|Success",
        "data"        => "Berhasil menghapus data User Assessment - User Assessment ID : ".$data->id.", User ID : ".$data->user_id.", Assessment ID : ".$data->assesment_id.", Status : ".$data->status.
                          ", Maxattempt : ".$data->maxattempt.", Attempt : ".$data->attempt,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      $log = new Ua([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete User Assessment - Delete|Failed",
        "data"        => "Gagal menghapus data User Assessment - User Assessment ID : ".$data->id.", User ID : ".$data->user_id.", Assessment ID : ".$data->assesment_id.", Status : ".$data->status.
                          ", Maxattempt : ".$data->maxattempt.", Attempt : ".$data->attempt,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "failed"
        )
      );
    }

  }

}
