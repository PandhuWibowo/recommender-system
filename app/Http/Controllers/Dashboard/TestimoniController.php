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
use App\Http\Models\Testimoni;
use App\Http\Models\ModelLogs\DirectPage;
use BrowserDetect;

/**
 * TestimoniController
 */
class TestimoniController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu User",
      "data"        => Session::get("email")." mengunjungi halaman Testimonial",
      "link"        => url()->current()
    ]);

    $logPages->save();
    $testimoni  = Testimoni::all();
    $users       = User::orderBy("firstname","asc")->where("level","Participant")->get();
    return view("administrator.dashboard.pages.testimonial.v_index",compact("testimoni","users"));
  }

  public function store(Request $request){
    // $foto               = $request->foto;
    // $namaTesti          = ucfirst(trim($request->nama_testi));
    // $namaInstansi       = ucfirst(trim($request->nama_instansi));
    // $pendapatTestimoni  = ucfirst(trim($request->pendapat_testimoni));

    $validator = Validator::make($request->all(), [
      'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'nama_testi' => 'required',
      'nama_instansi' => 'required',
      'pendapat_testimoni' => 'required',
    ]);

    if ($validator->passes()) {
      $input = $request->all();

      // images-testimoni
      $input['foto'] = time().'.'.$request->foto->getClientOriginalExtension();
      $request->foto->move(public_path('images/images-testimoni'), $input['foto']);

      Testimoni::create([
        'id'                => Uuid::generate()->string,
        'foto'              => $input['foto'],
        'nama_testi'        => Crypt::decrypt($input['nama_testi']),
        'nama_instansi'     => $input['nama_instansi'],
        'pendapat_testimoni'=> $input['pendapat_testimoni']
      ]);

      // return response()->json(['response'=>'success']);
      return Redirect::to("backend/pages/testimonial");
      exit();
    }

    return response()->json(['error'=>$validator->errors()->all()]);

  }

  public function destroy(Request $request){

  }
}
