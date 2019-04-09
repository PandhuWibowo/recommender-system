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

  public function store(Request $request){
    $assesmentId      = $request->assessment_id;
    $nama             = $request->nama;
    $kodeNama         = $request->kode_nama;

    $explodeNama      = explode(",", $nama);
    $explodeKodeNama  = explode(",", $kodeNama);
    for($i=0;$i<count($assesmentId);$i++){
      for($j=0;$j<count($explodeNama);$j++){
        // for ($k=0; $k < count($explodeKodeNama); $k++) {
          $persons = new Personality([
            'id'                => Uuid::generate()->string,
            'assessment_id'     => $assesmentId[$i],
            'nama'              => $explodeNama[$j],
            'kode_nama'         => $explodeKodeNama[$j]
          ]);
          $persons->save();
        // }
      }
    }

    return response()->json(
      array(
        "response"  => "success"
      )
    );

  }

  public function update(Request $request){
    $id           = Crypt::decrypt($request->id);
    $nama         = $request->nama;
    $assesmentId  = Crypt::decrypt($request->assessment_id);
    $kodeNama     = $request->kode_nama;

    $userPersons                = Personality::find($id);
    $userPersons->nama          = $nama;
    $userPersons->assessment_id  = $assesmentId;
    $userPersons->kode_nama     = $kodeNama;

    if($userPersons->save()){
      // $log = new Ua([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Update User Assessment - Update|Success",
      //   "data"        => "Berhasil mengubah data User Assessment - User Assessment ID : ".$request->id.", User ID : ".$request->user_id.", Assessment ID : ".$request->assesment_id.
      //                     ", Maxattempt : ".$request->maxattempt,
      //   "link"        => url()->current()
      // ]);
      //
      // $log->save();
      return response()->json(
        array(
          "response"  => "success"
        )
      );
    }else{
      // $log = new Ua([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Update User Assessment - Update|Failed",
      //   "data"        => "Gagal mengubah data User Assessment - User Assessment ID : ".$request->id.", User ID : ".$request->user_id.", Assessment ID : ".$request->assesment_id.
      //                     ", Maxattempt : ".$request->maxattempt,
      //   "link"        => url()->current()
      // ]);
      //
      // $log->save();
      return response()->json(
        array(
          "response"  => "failed"
        )
      );
    }
  }

  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    // $data = Personality::where('id', $txtId)->first();

    if(Personality::where('id',$txtId)->delete()){
      // $log = new Ua([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Delete User Assessment - Delete|Success",
      //   "data"        => "Berhasil menghapus data User Assessment - User Assessment ID : ".$data->id.", User ID : ".$data->user_id.", Assessment ID : ".$data->assesment_id.", Status : ".$data->status.
      //                     ", Maxattempt : ".$data->maxattempt.", Attempt : ".$data->attempt,
      //   "link"        => url()->current()
      // ]);
      //
      // $log->save();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      // $log = new Ua([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Delete User Assessment - Delete|Failed",
      //   "data"        => "Gagal menghapus data User Assessment - User Assessment ID : ".$data->id.", User ID : ".$data->user_id.", Assessment ID : ".$data->assesment_id.", Status : ".$data->status.
      //                     ", Maxattempt : ".$data->maxattempt.", Attempt : ".$data->attempt,
      //   "link"        => url()->current()
      // ]);
      //
      // $log->save();
      return response()->json(
        array(
          'response'  => "failed"
        )
      );
    }

  }
}
