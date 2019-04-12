<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\ConfigurationTwo;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use BrowserDetect;
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\Config;
/**
 * JenisAssesmentController
 */
class ConfigurationTwoController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Config 2",
      "data"        => Session::get("email")." mengunjungi halaman Configuration of Two",
      "link"        => url()->current()
    ]);

    $logPages->save();

    $configuration = ConfigurationTwo::all();
    return view("administrator.dashboard.pages.configuration2-page.v_index", compact("configuration"));
  }

  public function store(Request $request){
    $rules = array(
      'konfigurasi'  => 'required'
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
      $assesment = new ConfigurationTwo([
        'id'                => Uuid::generate()->string,
        'konfigurasi2'       => $request->konfigurasi,
      ]);
      if($assesment->save()){
        $log = new Config([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Storing Configuration of Two- Store|Success",
          "data"        => "Berhasil menyimpan data baru Configuration - Configuration ID : ".$assesment->id.", Jumlah : ".$request->konfigurasi,
          "link"        => url()->current()
        ]);

        $log->save();

        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        $log = new Config([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Storing Configuration - Store|Failed",
          "data"        => "Gagal menyimpan data baru Configuration of Two - Configuration ID : ".$assesment->id.", Jumlah : ".$request->konfigurasi,
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
      'id'            => 'required',
      'konfigurasi'   => 'required'
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
      $configuration                    = ConfigurationTwo::findOrFail(Crypt::decrypt($request->id));
      $configuration->konfigurasi2       = $request->konfigurasi;
      if($configuration->save()){
        $log = new Config([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Configuration of Two- Update|Success",
          "data"        => "Berhasil mengubah data Configuration of Two - Configuration ID : ".$request->id.", Jumlah : ".$request->konfigurasi,
          "link"        => url()->current()
        ]);

        $log->save();
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        $log = new Config([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Configuration - Update|Failed",
          "data"        => "Gagal mengubah data Configuration of Two- Configuration ID : ".$request->id.", Jumlah : ".$request->konfigurasi,
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
    $data = ConfigurationTwo::where('id', $txtId)->first();

    if(ConfigurationTwo::where('id',$txtId)->delete()){
      $log = new Config([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Configuration of Two- Delete|Success",
        "data"        => "Berhasil menghapus data Configuration of Two- Configuration ID : ".$data->id.", Jumlah : ".$data->konfigurasi,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      $log = new Config([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Configuration of Two- Delete|Failed",
        "data"        => "Gagal menghapus data Configuration of Two - Configuration ID : ".$data->id.", Jumlah : ".$data->konfigurasi,
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
