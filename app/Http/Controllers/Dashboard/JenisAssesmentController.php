<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\JenisAssesment;
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
 * JenisAssesmentController
 */
class JenisAssesmentController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Jenis Assessment",
      "data"        => Session::get("email")." mengunjungi halaman Jenis Assessment",
      "link"        => url()->current()
    ]);

    $logPages->save();

    $dataAssesments = JenisAssesment::all();
    return view("administrator.dashboard.pages.assesment-page.v_index", compact("dataAssesments"));
  }

  public function store(Request $request){
    $rules = array(
      'nama'  => 'required'
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
      $assesment = new JenisAssesment([
        'id'                => Uuid::generate()->string,
        'nama'              => ucwords(trim($request->nama)),
        'no_urut_assesment' => trim($request->no_urut_assesment)
      ]);
      if($assesment->save()){
        $log = new Assessment([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Storing Assessment Type - Store|Success",
          "data"        => "Berhasil menyimpan data baru Assessment Type - Assessment Type ID : ".$request->id.", Nama : ".ucwords(trim($request->nama)).", No Urut Assessment : ".$request->no_urut_assesment,
          "link"        => url()->current()
        ]);

        $log->save();

        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        $log = new Assessment([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Storing Assessment Type - Store|Failed",
          "data"        => "Gagal menyimpan data baru Assessment Type - Assessment Type ID : ".$request->id.", Nama : ".ucwords(trim($request->nama)).", No Urut Assessment : ".$request->no_urut_assesment,
          "link"        => url()->current()
        ]);

        $log->save();
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
      'id'    => 'required',
      'nama'  => 'required'
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
      $assesment                    = JenisAssesment::findOrFail(Crypt::decrypt($request->id));
      $assesment->nama              = $request->nama;
      $assesment->no_urut_assesment = $request->no_urut_assesment;
      if($assesment->save()){
        $log = new Assessment([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Assessment Type - Update|Success",
          "data"        => "Berhasil mengubah data Assessment Type - Assessment Type ID : ".$request->id.", Nama : ".ucwords(trim($request->nama)).", No Urut Assessment : ".$request->no_urut_assesment,
          "link"        => url()->current()
        ]);

        $log->save();
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        $log = new Assessment([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Assessment Type - Update|Failed",
          "data"        => "Gagal mengubah data Assessment Type - Assessment Type ID : ".$request->id.", Nama : ".ucwords(trim($request->nama)).", No Urut Assessment : ".$request->no_urut_assesment,
          "link"        => url()->current()
        ]);

        $log->save();
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
    $data = JenisAssesment::where('id', $txtId)->first();

    if(JenisAssesment::where('id',$txtId)->delete()){
      $log = new Assessment([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Assessment Type - Delete|Success",
        "data"        => "Berhasil menghapus data Assessment Type - Assessment Type ID : ".$data->id.", Name : ".ucwords(trim($data->nama)).", No Urut Assessment : ".$data->no_urut_assesment,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      $log = new Assessment([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Assessment Type - Delete|Failed",
        "data"        => "Gagal menghapus data Assessment Type - Assessment Type ID : ".$data->id.", Name : ".ucwords(trim($data->nama)).", No Urut Assessment : ".$data->no_urut_assesment,
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
