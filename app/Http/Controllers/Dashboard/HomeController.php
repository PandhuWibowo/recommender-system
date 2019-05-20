<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

/**
 *  HomeController
 */
class HomeController extends Controller
{

  public function index(Request $request){
    return view('administrator.dashboard.pages.v_index');
  }


}
