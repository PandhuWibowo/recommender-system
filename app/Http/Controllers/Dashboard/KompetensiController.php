<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\Kompetensi;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\Competency;
use BrowserDetect;

/**
 * KompetensiController
 */
class KompetensiController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Kompetensi",
      "data"        => Session::get("email")." mengunjungi halaman Kompetensi",
      "link"        => url()->current()
    ]);

    $logPages->save();

    $dataKompetensis = Kompetensi::all();
    return view("administrator.dashboard.pages.kompetensi-page.v_index", compact("dataKompetensis"));
  }

  public function store(Request $request){
    $rules = array(
      'kompetensi'  => 'required',
      'definisi'    => 'required',
      'p_mandiri'   => 'required',
      'p_bermitra'  => 'required',
      't_pelatihan' => 'required'
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
      $assesment = new Kompetensi([
        'id'                => Uuid::generate()->string,
        'kompetensi'        => ucfirst(trim($request->kompetensi)),
        'no_urut_kompetensi'=> trim($request->no_urut_kompetensi),
        'definisi'          => ucfirst(trim($request->definisi)),
        'p_mandiri'         => ucfirst(trim($request->p_mandiri)),
        'p_bermitra'        => ucfirst(trim($request->p_bermitra)),
        't_pelatihan'       => ucfirst(trim($request->t_pelatihan)),
      ]);

      if($assesment->save()){
        $log = new Competency([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Store Kompetensi - Store|Success",
          "data"        => "Berhasil menyimpan data baru Kompetensi - Kompetensi ID : ".$request->id.", Kompetensi : ".ucwords(trim($request->kompetensi)).", Definisi : ".$request->definisi.", Pengembangan Mandiri : ".$request->p_mandiri.
                           ", Pengembangan Bermitra : ".$request->p_bermitra.", Tema Pelatihan : ".$request->t_pelatihan.", No Urut : ".$request->no_urut_kompetensi,
          "link"        => url()->current()
        ]);

        $log->save();

        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        $log = new Competency([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Store Kompetensi - Store|Success",
          "data"        => "Gagal menyimpan data baru Kompetensi - Kompetensi ID : ".$request->id.", Kompetensi : ".ucwords(trim($request->kompetensi)).", Definisi : ".$request->definisi.", Pengembangan Mandiri : ".$request->p_mandiri.
                           ", Pengembangan Bermitra : ".$request->p_bermitra.", Tema Pelatihan : ".$request->t_pelatihan.", No Urut : ".$request->no_urut_kompetensi,
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
      'id'          => 'required',
      'kompetensi'  => 'required',
      'definisi'    => 'required',
      'p_mandiri'   => 'required',
      'p_bermitra'  => 'required',
      't_pelatihan' => 'required'
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
      $assesment                      = Kompetensi::findOrFail(Crypt::decrypt($request->id));
      $assesment->kompetensi          = $request->kompetensi;
      $assesment->no_urut_kompetensi  = $request->no_urut_kompetensi;
      $assesment->definisi            = $request->definisi;
      $assesment->p_mandiri           = $request->p_mandiri;
      $assesment->p_bermitra          = $request->p_bermitra;
      $assesment->t_pelatihan         = $request->t_pelatihan;
      if($assesment->save()){
        $log = new Competency([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Kompetensi - Update|Success",
          "data"        => "Berhasil mengubah data Kompetensi - Kompetensi ID : ".$request->id.", Kompetensi : ".ucwords(trim($request->kompetensi)).", Definisi : ".$request->definisi.", Pengembangan Mandiri : ".$request->p_mandiri.
                           ", Pengembangan Bermitra : ".$request->p_bermitra.", Tema Pelatihan : ".$request->t_pelatihan.", No Urut : ".$request->no_urut_kompetensi,
          "link"        => url()->current()
        ]);

        $log->save();
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        $log = new Competency([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Kompetensi - Update|Success",
          "data"        => "Gagal mengubah data Kompetensi - Kompetensi ID : ".$request->id.", Kompetensi : ".ucwords(trim($request->kompetensi)).", Definisi : ".$request->definisi.", Pengembangan Mandiri : ".$request->p_mandiri.
                           ", Pengembangan Bermitra : ".$request->p_bermitra.", Tema Pelatihan : ".$request->t_pelatihan.", No Urut : ".$request->no_urut_kompetensi,
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
    $data = Kompetensi::where('id', $txtId)->first();

    if (Kompetensi::where('id',$txtId)->delete()) {
      $log = new Competency([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Kompetensi - Delete|Success",
        "data"        => "Berhasil menghapus data Kompetensi - Kompetensi ID : ".$data->id.", Kompetensi : ".ucwords(trim($data->kompetensi)).", Definisi : ".$data->definisi.", Pengembangan Mandiri : ".$data->p_mandiri.
                         ", Pengembangan Bermitra : ".$data->p_bermitra.", Tema Pelatihan : ".$data->t_pelatihan.", No Urut : ".$data->no_urut_kompetensi,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      $log = new Competency([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Kompetensi - Delete|Success",
        "data"        => "Berhasil menghapus data Kompetensi - Kompetensi ID : ".$data->id.", Kompetensi : ".ucwords(trim($data->kompetensi)).", Definisi : ".$data->definisi.", Pengembangan Mandiri : ".$data->p_mandiri.
                         ", Pengembangan Bermitra : ".$data->p_bermitra.", Tema Pelatihan : ".$data->t_pelatihan.", No Urut : ".$data->no_urut_kompetensi,
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
