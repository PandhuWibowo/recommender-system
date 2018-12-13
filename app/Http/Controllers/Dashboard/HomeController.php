<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

/**
 *
 */
class HomeController extends Controller
{
  public function index(){
    return view('administrator.dashboard.pages.v_index');
  }
}
