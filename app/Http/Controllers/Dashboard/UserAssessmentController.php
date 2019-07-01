<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\JenisAssesment;
use App\Http\Models\UserAssessment;
use App\Http\Models\Assesment;
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

  //Bikin User_id dan Jenis Assessment unik
  public function super_unique($array,$key)
  {
     $temp_array = [];
     foreach ($array as &$v) {
         if (!isset($temp_array[$v[$key]]))
         $temp_array[$v[$key]] =& $v;
     }
     $array = array_values($temp_array);
     return $array;
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

      // print_r($this->super_unique($v, 0));
      $arrLastAssessmentId = array();
      foreach($rows as $k=>$v){
        $superUnique  = $this->super_unique($v, 0);
        $forAssessments = array_filter(array_map('array_filter', $superUnique));
        foreach ($forAssessments as $key => $value) {
          if(empty($value[0]) || empty($value[1])){
            continue;
          }else{
            $assessments = new Assesment([
              'id'                  => Uuid::generate()->string,
              'user_id'             => $value[0],
              'jenis_assessment_id' => $value[1],
              'maxattempt'          => $value[2],
              'selesai'             => "1"
            ]);
            $assessments->save();

            $arrLastAssessmentId[] = $assessments->id;
          }
        }

        $arrayFilter = array_filter(array_map('array_filter', $v));
        // print_r($arrLastAssessmentId);

        foreach($arrLastAssessmentId as $kys=>$vv){
          $assessments = Assesment::where("id", $vv)->select("user_id")->first();
          if(count($assessments) > 0){
            foreach($arrayFilter as $ks=>$vle){
              
            }


          }
        }

      }



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
