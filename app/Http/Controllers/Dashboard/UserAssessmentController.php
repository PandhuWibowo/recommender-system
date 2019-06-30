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
use App\Imports\AssessmentImport;
// use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

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
      'user_id'             => 'required|unique:detail_users_jenis_assessments,user_id,NULL,id,jenis_assessment_id,'.$request->jenis_assessment_id[0],
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

  public function importUserDanJenis(Request $request){
    if (empty($request->file('file')))
    {
        return back()->with('error','No file selected');
    }
    else{
      // validasi
      $this->validate($request, [
        'file' => 'required|mimes:csv,xls,xlsx'
      ]);

      // menangkap file excel
      $file = $request->file('file');

      // membuat nama file unik
      $nama_file = rand().$file->getClientOriginalName();

      // upload ke folder file_siswa di dalam folder public
      $file->move(public_path('dataset'), $nama_file);
      $rows = Excel::toArray(new AssessmentImport, public_path('/dataset/'.$nama_file));
      foreach($rows as $k=>$v){

      }
      //
      // foreach($vl as $val){
      //   // echo $val;
      // }
      print_r($v);

      // for($i = 0; $i < count($v); $i++){
        foreach($v as $key=>$vl){
          foreach($vl as $ky=>$val){
            echo "<br>";
            echo $ky;
            
            // $userAssessments = new UserAssessment([
            //   'user_id'             => $val,
            //   'jenis_assessment_id' => $val,
            //   'maxattempt'          => $val,
            //   'status'              => intval(0)
            // ]);
            // $userAssessments->save();
          }
        }
      // }


      // return response()->json(["rows"=>$rows]);
      // return back();
      // return redirect()->back()->with(['success' => 'Has been uploaded']);
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
