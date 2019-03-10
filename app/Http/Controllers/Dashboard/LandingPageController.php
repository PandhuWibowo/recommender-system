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

/**
 * LandingPageController
 */
class LandingPageController extends Controller
{
  public function index(){
    $partnerships = Partnership::orderBy("created_at","desc")->get();
    return view("administrator.dashboard.pages.partnership-page.v_index", compact("partnerships"));
  }

  public function show($id){
    return view("", compact(""));
  }
}
