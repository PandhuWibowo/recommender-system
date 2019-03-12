<?php

namespace App\Http\Controllers\Dashboard;

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
use App\Http\Models\Partnership;
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\KerjaSama;
use BrowserDetect;

/**
 * LandingPageController
 */
class LandingPageController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Partnership",
      "data"        => Session::get("email")." mengunjungi halaman Partnership",
      "link"        => url()->current()
    ]);

    $logPages->save();
    
    $partnerships = Partnership::orderBy("created_at","desc")->get();
    return view("administrator.dashboard.pages.partnership-page.v_index", compact("partnerships"));
  }

  // public function show($id){
  //   return view("", compact(""));
  // }

  public function update(Request $request){
    $updateStatus = trim($request->status);

    $partnerships = Partnership::findOrFail(Crypt::decrypt($request->id));
    $partnerships->status = $updateStatus;

    if($partnerships->save()){

      $logPages = new KerjaSama([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Update Status Baca Pesan",
        "data"        => Session::get("email")." telah membaca pesan dari visitor",
        "link"        => url()->current()
      ]);

      $logPages->save();
      return response()->json(
          array(
            'response' => "success"
          )
      );
    }else{
      $logPages = new KerjaSama([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Update Status Baca Pesan",
        "data"        => Session::get("email")." masih belum membaca pesan",
        "link"        => url()->current()
      ]);

      $logPages->save();
      return response()->json(
        array(
          'response' => "failed"
        )
      );
    }

  }
}
