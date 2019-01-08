<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\KeteranganNilai;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
/**
 * KeteranganNilaiController
 */
class KeteranganNilaiController extends Controller
{
  public function index(){
    $keteranganNilai  = KeteranganNilai::all();
    return view("administrator.dashboard.pages.keterangannilai-page.v_index", compact("keteranganNilai"));
  }

  public function store(Request $request){
    $rules = array(
      'range_score'  => 'required',
      'keterangan'  => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return response()->json(
        array(
          'error' => $validator
        )
      );
    }
    else{
      $assesment = new KeteranganNilai([
        'id'          => Uuid::generate()->string,
        'range_score' => ucfirst(trim($request->range_score)),
        'keterangan'  => trim($request->keterangan)
      ]);
      $assesment->save();
      return response()->json(
          array(
            'response' => "success"
          )
      );
    }
  }

  public function update(Request $request){
    $rules = array(
      'id'            => 'required',
      'range_score'   => 'required',
      'keterangan'    => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return response()->json(
        array(
          'error' => $validator
        )
      );
    }
    else{
      $assesment                    = KeteranganNilai::findOrFail(Crypt::decrypt($request->id));
      $assesment->range_score       = $request->range_score;
      $assesment->keterangan        = $request->keterangan;
      $assesment->save();
      return response()->json(
          array(
            'response' => "success"
          )
      );
    }
  }

  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    KeteranganNilai::where('id',$txtId)->delete();
    return response()->json(
      array(
        'response'  => "success"
      )
    );
  }
}
