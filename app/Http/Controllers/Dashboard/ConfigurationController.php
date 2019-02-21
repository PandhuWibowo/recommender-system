<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\Configuration;
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
class ConfigurationController extends Controller
{
  public function index(){
    $configuration = Configuration::all();
    return view("administrator.dashboard.pages.configuration-page.v_index", compact("configuration"));
  }

  public function store(Request $request){
    $rules = array(
      'konfigurasi'  => 'required'
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
      $assesment = new Configuration([
        'id'                => Uuid::generate()->string,
        'konfigurasi'     => $request->konfigurasi,
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
      'konfigurasi'   => 'required'
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
      $configuration                = Configuration::findOrFail(Crypt::decrypt($request->id));
      $configuration->konfigurasi       = $request->konfigurasi;
      $configuration->save();
      return response()->json(
          array(
            'response' => "success"
          )
      );
    }
  }
  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    Configuration::where('id',$txtId)->delete();
    return response()->json(
      array(
        'response'  => "success"
      )
    );
  }
}
