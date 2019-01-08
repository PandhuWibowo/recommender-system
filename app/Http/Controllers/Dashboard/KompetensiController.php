<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\Kompetensi;
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
class KompetensiController extends Controller
{
  public function index(){
    $dataKompetensis = Kompetensi::all();
    return view("administrator.dashboard.pages.kompetensi-page.v_index", compact("dataKompetensis"));
  }

  public function store(Request $request){
    $rules = array(
      'kompetensi'  => 'required'
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
      $assesment = new Kompetensi([
        'id'                => Uuid::generate()->string,
        'kompetensi'        => ucfirst(trim($request->kompetensi)),
        'no_urut_kompetensi'=> trim($request->no_urut_kompetensi)
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
      'id'          => 'required',
      'kompetensi'  => 'required'
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
      $assesment                      = Kompetensi::findOrFail(Crypt::decrypt($request->id));
      $assesment->kompetensi          = $request->kompetensi;
      $assesment->no_urut_kompetensi  = $request->no_urut_kompetensi;
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
    Kompetensi::where('id',$txtId)->delete();
    return response()->json(
      array(
        'response'  => "success"
      )
    );
  }
}
