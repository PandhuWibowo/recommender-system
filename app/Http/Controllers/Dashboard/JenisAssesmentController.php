<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\JenisAssesment;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
/**
 * JenisAssesmentController
 */
class JenisAssesmentController extends Controller
{
  public function index(){
    $dataAssesments = JenisAssesment::all();
    return view("administrator.dashboard.pages.assesment-page.v_index", compact("dataAssesments"));
  }

  public function store(Request $request){
    
  }
}
