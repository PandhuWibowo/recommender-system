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

/**
 * MainController
 */

class MainController extends Controller
{

  public function index(Request $request){
    $countAssessments = Assesment::all()->count();
    return view("landingpage.v_index", compact("countAssessments"));
  }

  public function store(Request $request){
    $nama     = ucwords(trim($request->nama));
    $institusi= ucwords(trim($request->institusi));
    $no_pe    = $request->no_pe;
    $kebutuhan= ucfirst(trim($request->kebutuhan));

    $partnership = new Partnership([
      "id"        => Uuid::generate()->string,
      "nama"      => $nama,
      "institusi" => $institusi,
      "no_pe"     => $no_pe,
      "kebutuhan" => $kebutuhan
    ]);

    if($partnership->save()){
      return response()->json(
        array(
          "response"    => "success"
        )
      );
    }else{
      return response()->json(
        array(
          "response"    => "failed"
        )
      );
    }
  }
}
