<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

/**
 *  HomeController
 */
class HomeController extends Controller
{

  public function index(Request $request){
    return view('partisipan.dashboard.v_index');
  }
}
