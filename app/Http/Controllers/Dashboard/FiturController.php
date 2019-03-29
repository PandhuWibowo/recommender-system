<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
// use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\User;
use App\Http\Models\Fitur;
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\Fitural;
use BrowserDetect;

/**
 * FiturController
 */
class FiturController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Feature",
      "data"        => Session::get("email")." mengunjungi halaman Fitur",
      "link"        => url()->current()
    ]);

    $logPages->save();
    $fitur  = Fitur::all();
    return view("administrator.dashboard.pages.fitur.v_index",compact("fitur"));
  }

  public function store(Request $request){
    // $foto               = $request->foto;
    // $namaTesti          = ucfirst(trim($request->nama_testi));
    // $namaInstansi       = ucfirst(trim($request->nama_instansi));
    // $pendapatFitur  = ucfirst(trim($request->pendapat_Fitur));

    $validator = Validator::make($request->all(), [
      'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'title' => 'required',
      'description' => 'required'
    ]);

    if ($validator->passes()) {
      $input = $request->all();

      // images-Fitur
      $input['foto'] = time().'.'.$request->foto->getClientOriginalExtension();
      $request->foto->move(public_path('../../public_html/images/images-feature'), $input['foto']);

      Fitur::create([
        'id'                => Uuid::generate()->string,
        'image'              => $input['foto'],
        'title'             => $input['title'],
        'description'       => $input['description']
      ]);

      // $log = new Fitural([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Delete Fitural - Delete|Success",
      //   "data"        => "Berhasil menyimpan data Fitur - Fitural ID : ".$input['foto'].",".Crypt::decrypt($input['nama_testi']).",".$input['nama_instansi'].",".$input['pendapat_Fitur'],
      //   "link"        => url()->current()
      // ]);
      //
      // $log->save();

      // return response()->json(['response'=>'success']);
      return Redirect::to("backend/pages/features");
      exit();
    }

    return response()->json(['error'=>$validator->errors()->all()]);

  }

  public function update(Request $request){
    $varId            = Crypt::decrypt($request->edit_id);
    $varTitle         = ucfirst(trim($request->edit_title));
    $varDescription   = ucfirst(trim($request->edit_description));
    $varFoto          = $request->hasFile('foto');

    if($varFoto){
      //TODO: Update data dengan foto baru
      $validator = Validator::make($request->all(), [
        'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'edit_title' => 'required',
        'edit_description' => 'required',
      ]);

      if($validator->passes()){
        $input = $request->all();

        // images-Fitur
        $input['foto'] = time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('../../public_html/images/images-feature'), $input['foto']);

        $elUpdate                     = Fitur::findOrFail($varId);
        $elUpdate->title              = $varTitle;
        $elUpdate->description        = $varDescription;
        $elUpdate->image              = $input['foto'];

        $elUpdate->save();
        Session::flash("success","Oops, success for updated :)");
        return Redirect::to("backend/pages/features");
        exit();
      }
    }else{
      // TODO: Ambil string gambar dari database
      $cekStringGambar              = Fitur::where('id', $varId)->first();
      $elUpdate                     = Fitur::findOrFail($varId);
      $elUpdate->title              = $varTitle;
      $elUpdate->description        = $varDescription;
      $elUpdate->image              = $cekStringGambar->foto;

      $elUpdate->save();
      Session::flash("failed","Oops, failed for updated :(");
      return Redirect::to("backend/pages/features");
      exit();
    }
  }

  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    $data = Fitur::where('id', $txtId)->first();

    if(Fitur::where('id',$txtId)->delete()){
      // $log = new Fitural([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Delete Fitural - Delete|Success",
      //   "data"        => "Berhasil menghapus data Fitur - Fitural ID : ".$data->id,
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
      // $log = new Fitural([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Delete Fitural - Delete|Failed",
      //   "data"        => "Gagal menghapus data Fitur - Fitural Type ID : ".$data->id,
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
