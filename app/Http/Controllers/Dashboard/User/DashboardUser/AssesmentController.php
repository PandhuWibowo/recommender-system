<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\JenisAssesment;
use App\Http\Models\Assesment;
use App\Http\Models\Pertanyaan;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
/**
 * UserController
 */
class AssesmentController extends Controller
{
  public function index(){
    $jenisAssesment   = JenisAssesment::all();
    return view("partisipan.dashboard.assesment.v_assesment", compact("jenisAssesment"));
  }

  public function store(Request $request){
    $assesment = new Assesment([
      'id'            => Uuid::generate()->string,
      'user_id'       => Session::get("id"),
      'tanggal_akses' => Carbon::now()->format('Y-m-d')
    ]);
    $assesment->save();
    return response()->json(
        array(
          'response'  => "success",
          'id'        => $request->id
        )
    );
  }

  public function show($id){
    $decryptId    = Crypt::decrypt($id);
    $questions    = Pertanyaan::with(array('get_kompetensi' => function($query) {
        $query->orderBy('kompetensi', 'asc');
    }))->with("get_assesment")->with("get_rowscore")->get();




    return view("partisipan.dashboard.assesment.v_question", compact("questions"));
  }
}
