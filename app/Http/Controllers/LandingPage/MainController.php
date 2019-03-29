<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\Assesment;
use App\Http\Models\Partnership;
use App\Http\Models\ModelLogs\KerjaSama;
use BrowserDetect;
use App\Http\Models\Testimoni;
use App\Http\Models\Fitur;


/**
 * MainController
 */

class MainController extends Controller
{

  public function index(Request $request){
    $countAssessments = Assesment::all()->count();
    $feature    = Fitur::orderBy("created_at","asc")->limit(4)->get();
    $testimoni  = Testimoni::orderBy("created_at","desc")->limit(4)->get();
    return view("landingpage.v_index", compact("countAssessments","testimoni","feature"));
  }

  public function store(Request $request){
    $namaDepan      = ucwords(trim($request->nama_depan));
    $namaBelakang   = ucwords(trim($request->nama_belakang));
    $email          = lcfirst(trim($request->email));
    $noPe           = $request->no_pe;
    $subject        = ucfirst(trim($request->subject));
    $kebutuhan      = ucfirst(trim($request->kebutuhan));

    $partnership = new Partnership([
      "id"            => Uuid::generate()->string,
      "nama_depan"    => $namaDepan,
      "nama_belakang" => $namaBelakang,
      "email"         => $email,
      "no_pe"         => $noPe,
      "subject"       => $subject,
      "kebutuhan"     => $kebutuhan
    ]);

    if($partnership->save()){
      $logPages = new KerjaSama([
        "user_id"     => $partnership->id,
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Visitor|Store|Success",
        "data"        => $namaDepan." ".$namaBelakang." telah mengirim pesan untuk bekerja sama",
        "link"        => url()->current()
      ]);

      $logPages->save();
      return response()->json(
        array(
          "response"    => "success"
        )
      );
    }else{
      $logPages = new KerjaSama([
        "user_id"     => $partnership->id,
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Visitor|Store|Failed",
        "data"        => $nama." gagal mengirim pesan untuk bekerja sama",
        "link"        => url()->current()
      ]);

      $logPages->save();
      return response()->json(
        array(
          "response"    => "failed"
        )
      );
    }
  }
}
