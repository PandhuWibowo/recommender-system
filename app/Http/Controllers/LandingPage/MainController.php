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

/**
 * MainController
 */
class MainController extends Controller
{

  public function index(Request $request){
    return view("landingpage.v_index");
  }
}
