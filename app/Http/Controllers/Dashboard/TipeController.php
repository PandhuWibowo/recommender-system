<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\JenisAssesment;
use App\Http\Models\Type;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\Assessment;
use BrowserDetect;

/**
 * TipeController
 */
class TipeController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Type",
      "data"        => Session::get("email")." mengunjungi halaman Type",
      "link"        => url()->current()
    ]);

    $logPages->save();

    $dataType = Type::all();
    $jenisAssessments = JenisAssesment::orderBy("nama","asc")->where("model","2")->get();
    return view("administrator.dashboard.pages.tipe-page.v_index", compact("dataType","jenisAssessments"));
  }

  public function store(Request $request){
    $rules = array(
      'assessment_id'      => 'required',
      'keterangan_tipe_1'  => 'required',
      'keterangan_tipe_2'  => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return response()->json(
        array(
          'error' => $validator
        )
      );
    }
    else{
      $assesment = new Type([
        'id'                => Uuid::generate()->string,
        'assessment_id'     => Crypt::decrypt($request->assessment_id),
        'keterangan_tipe_1' => trim($request->keterangan_tipe_1),
        'keterangan_tipe_2' => trim($request->keterangan_tipe_2)
      ]);
      if($assesment->save()){
        // $log = new Assessment([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Storing Assessment Type - Store|Success",
        //   "data"        => "Berhasil menyimpan data baru Assessment Type - Assessment Type ID : ".$request->id.", Nama : ".ucwords(trim($request->nama)).", No Urut Assessment : ".$request->no_urut_assesment,
        //   "link"        => url()->current()
        // ]);
        //
        // $log->save();

        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        // $log = new Assessment([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Storing Assessment Type - Store|Failed",
        //   "data"        => "Gagal menyimpan data baru Assessment Type - Assessment Type ID : ".$request->id.", Nama : ".ucwords(trim($request->nama)).", No Urut Assessment : ".$request->no_urut_assesment,
        //   "link"        => url()->current()
        // ]);
        //
        // $log->save();
        return response()->json(
            array(
              'response' => "failed"
            )
        );
      }

    }
  }

  public function update(Request $request){
    $rules = array(
      'id'                => 'required',
      'assessment_id'    => 'required',
      'keterangan_tipe_1' => 'required',
      'keterangan_tipe_2' => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return response()->json(
        array(
          'error' => $validator
        )
      );
    }
    else{
      $assesment                    = Type::findOrFail(Crypt::decrypt($request->id));
      $assesment->assessment_id     = $request->assessment_id;
      $assesment->keterangan_tipe_1 = $request->keterangan_tipe_1;
      $assesment->keterangan_tipe_2 = $request->keterangan_tipe_2;
      if($assesment->save()){
        // $log = new Assessment([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Update Assessment Type - Update|Success",
        //   "data"        => "Berhasil mengubah data Assessment Type - Assessment Type ID : ".$request->id.", Nama : ".ucwords(trim($request->nama)).", No Urut Assessment : ".$request->no_urut_assesment,
        //   "link"        => url()->current()
        // ]);
        //
        // $log->save();
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        // $log = new Assessment([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Update Assessment Type - Update|Failed",
        //   "data"        => "Gagal mengubah data Assessment Type - Assessment Type ID : ".$request->id.", Nama : ".ucwords(trim($request->nama)).", No Urut Assessment : ".$request->no_urut_assesment,
        //   "link"        => url()->current()
        // ]);
        //
        // $log->save();
        return response()->json(
            array(
              'response' => "failed"
            )
        );
      }


    }
  }
  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    $data = Type::where('id', $txtId)->first();

    if(Type::where('id',$txtId)->delete()){
      // $log = new Assessment([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Delete Assessment Type - Delete|Success",
      //   "data"        => "Berhasil menghapus data Assessment Type - Assessment Type ID : ".$data->id.", Name : ".ucwords(trim($data->nama)).", No Urut Assessment : ".$data->no_urut_assesment,
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
      // $log = new Assessment([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Delete Assessment Type - Delete|Failed",
      //   "data"        => "Gagal menghapus data Assessment Type - Assessment Type ID : ".$data->id.", Name : ".ucwords(trim($data->nama)).", No Urut Assessment : ".$data->no_urut_assesment,
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
