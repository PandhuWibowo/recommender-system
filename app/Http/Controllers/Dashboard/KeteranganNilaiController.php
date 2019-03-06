<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\KeteranganNilai;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\DescScore;
use BrowserDetect;

/**
 * KeteranganNilaiController
 */
class KeteranganNilaiController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Description Score",
      "data"        => Session::get("email")." mengunjungi halaman Description Score",
      "link"        => url()->current()
    ]);

    $logPages->save();

    $keteranganNilai  = KeteranganNilai::all();
    return view("administrator.dashboard.pages.keterangannilai-page.v_index", compact("keteranganNilai"));
  }

  public function store(Request $request){
    $rules = array(
      'range_score'     => 'required',
      'keterangan'      => 'required',
      'jenisketerangan' => 'required'
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
      $assesment = new KeteranganNilai([
        'id'              => Uuid::generate()->string,
        'range_score'     => ucfirst(trim($request->range_score)),
        'keterangan'      => trim($request->keterangan),
        'jenisketerangan' => ucfirst(trim($request->jenisketerangan))
      ]);

      if($assesment->save()){
        $log = new DescScore([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Store Description Score - Store|Success",
          "data"        => "Berhasil menyimpan data baru Description Score - Description Score ID : ".$assesment->id.", Range Score : ".ucwords(trim($request->range_score)).", Keterangan : ".$request->keterangan.", Jenis Keterangan : ".$request->jenisketerangan,
          "link"        => url()->current()
        ]);

        $log->save();
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        $log = new DescScore([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Store Description Score - Store|Failed",
          "data"        => "Gagal menyimpan data baru Description Score - Description Score ID : ".$assesment->id.", Range Score : ".ucwords(trim($request->range_score)).", Keterangan : ".$request->keterangan.", Jenis Keterangan : ".$request->jenisketerangan,
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
      'id'              => 'required',
      'range_score'     => 'required',
      'keterangan'      => 'required',
      'jenisketerangan' => 'required'
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
      $assesment                    = KeteranganNilai::findOrFail(Crypt::decrypt($request->id));
      $assesment->range_score       = $request->range_score;
      $assesment->keterangan        = $request->keterangan;
      $assesment->jenisketerangan   = $request->jenisketerangan;
      if($assesment->save()){
        $log = new DescScore([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Description Score - Update|Success",
          "data"        => "Berhasil mengubah data baru Description Score - Description Score ID : ".$request->id.", Range Score : ".ucwords(trim($request->range_score)).", Keterangan : ".$request->keterangan.", Jenis Keterangan : ".$request->jenisketerangan,
          "link"        => url()->current()
        ]);

        $log->save();

        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        $log = new DescScore([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Description Score - Update|Failed",
          "data"        => "Gagal mengubah data baru Description Score - Description Score ID : ".$request->id.", Range Score : ".ucwords(trim($request->range_score)).", Keterangan : ".$request->keterangan.", Jenis Keterangan : ".$request->jenisketerangan,
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
    $data = KeteranganNilai::where('id', $txtId)->first();

    if(KeteranganNilai::where('id',$txtId)->delete()){
      $log = new DescScore([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Description Score - Delete|Success",
        "data"        => "Berhasil mengubah data baru Description Score - Description Score ID : ".$data->id.", Range Score : ".ucwords(trim($data->range_score)).", Keterangan : ".$data->keterangan.", Jenis Keterangan : ".$data->jenisketerangan,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      $log = new DescScore([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Description Score - Delete|Failed",
        "data"        => "Gagal menghapus data baru Description Score - Description Score ID : ".$data->id.", Range Score : ".ucwords(trim($data->range_score)).", Keterangan : ".$data->keterangan.", Jenis Keterangan : ".$data->jenisketerangan,
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
