<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

/**
 *  HomeController
 */
class HomeController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function index(){
    // $title  = "Dashboard";
    return view('partisipan.dashboard.v_index');
  }


}
