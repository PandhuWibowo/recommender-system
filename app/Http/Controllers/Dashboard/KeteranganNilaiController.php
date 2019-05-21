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
  public function index(Request $request){
    $keteranganNilai  = KeteranganNilai::all();
    return view("administrator.dashboard.pages.keterangannilai-page.v_index", compact("keteranganNilai"));
  }

  public function store(Request $request){
    $rules = array(
      'range_score'     => 'required',
      'keterangan'      => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $message = $validator->getMessageBag()->toArray();
      if(!empty($message["range_score"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["range_score"]
          )
        );
      }else if(!empty($message["keterangan"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["keterangan"]
          )
        );
      }
    }
    else{
      $assesment = new KeteranganNilai([
        'id'              => Uuid::generate()->string,
        'range_score'     => ucfirst(trim($request->range_score)),
        'keterangan'      => trim($request->keterangan)
      ]);

      if($assesment->save()){
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        return response()->json(
            array(
              'response' => "failed"
            )
        );
      }
    }
  }

  public function update(Request $request){
    $rules = array(
      'id'              => 'required',
      'range_score'     => 'required',
      'keterangan'      => 'required',
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $message = $validator->getMessageBag()->toArray();
      if(!empty($message["range_score"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["range_score"]
          )
        );
      }else if(!empty($message["keterangan"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["keterangan"]
          )
        );
      }
    }
    else{
      $assesment                    = KeteranganNilai::findOrFail(Crypt::decrypt($request->id));
      $assesment->range_score       = $request->range_score;
      $assesment->keterangan        = $request->keterangan;
      if($assesment->save()){
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        return response()->json(
            array(
              'response' => "failed"
            )
        );
      }
    }
  }

  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    if(KeteranganNilai::where('id',$txtId)->delete()){
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      return response()->json(
        array(
          'response'  => "failed"
        )
      );
    }

  }
}
