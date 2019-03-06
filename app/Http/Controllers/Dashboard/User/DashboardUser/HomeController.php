<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Models\ModelLogs\DirectPage;
use BrowserDetect;

/**
 *  HomeController
 */
class HomeController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Home",
      "data"        => Session::get("email")." mengunjungi halaman Home",
      "link"        => url()->current()
    ]);

    $logPages->save();
    // $title  = "Dashboard";
    return view('partisipan.dashboard.v_index');
  }


}
