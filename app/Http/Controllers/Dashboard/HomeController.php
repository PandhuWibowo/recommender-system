<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

/**
 *  HomeController
 */
class HomeController extends Controller
{
  public function index(){
    // $title  = "Dashboard";
    return view('administrator.dashboard.pages.v_index');
  }


}
