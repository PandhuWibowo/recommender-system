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
use App\Http\Models\Assesment;

/**
 * MainController
 */
 
class MainController extends Controller
{

  public function index(Request $request){
    $countAssessments = Assesment::all()->count();
    return view("landingpage.v_index", compact("countAssessments"));
  }
}
