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
use Illuminate\Http\Response;

/**
 * JenisAssesmentController
 */
class JenisAssesmentController extends Controller
{
  public function index(Request $request){
    $dataAssesments = JenisAssesment::all();
    return view("administrator.dashboard.pages.assesment-page.v_index", compact("dataAssesments"));
  }

  public function store(Request $request){
    $rules = array(
      'nama'  => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $message = $validator->getMessageBag()->toArray();
      if(!empty($message["nama"])){
        return response()->json(
          array(
            'response'  => "errors",
            'errors' => $message["nama"]
          )
        );
      }

    }
    else{
      $assesment = new JenisAssesment([
        'id'                => Uuid::generate()->string,
        'nama'              => ucwords(trim($request->nama))
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
      'id'    => 'required',
      'nama'  => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $message = $validator->getMessageBag()->toArray();
      if(!empty($message["nama"])){
        return response()->json(
          array(
            'response'  => "errors",
            'errors' => $message["nama"]
          )
        );
      }
    }
    else{
      $assesment                    = JenisAssesment::findOrFail(Crypt::decrypt($request->id));
      $assesment->nama              = $request->nama;
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
    $data = JenisAssesment::where('id', $txtId)->first();

    if(JenisAssesment::where('id',$txtId)->delete()){
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
