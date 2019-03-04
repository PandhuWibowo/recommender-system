<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
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
    // $title  = "Dashboard";
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Home",
      "data"        => Session::get("email")." mengunjungi halaman Home",
      "link"        => url()->current()
    ]);

    $logPages->save();

    return view('administrator.dashboard.pages.v_index');
  }


}
