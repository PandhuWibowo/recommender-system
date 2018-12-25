<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\Pertanyaan;
use App\Http\Models\JenisAssesment;
use App\Http\Models\Kompetensi;
use App\Http\Models\RowScore;
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
class PertanyaanController extends Controller
{
  public function index(){
    $assesments = JenisAssesment::all();
    $kompetensi = Kompetensi::all();
    $rowscore   = RowScore::all();
    $pertanyaan = Pertanyaan::all();
    // $pertanyaan = Pertanyaan::with("get_assesment")->with("get_kompetensi")->with("get_rowscore");
    return view("administrator.dashboard.pages.pertanyaan-page.v_index", compact("pertanyaan","assesments","kompetensi","rowscore"));
    // echo dd($pertanyaan);
  }

  public function store(Request $request){
    $rules = array(
      'pertanyaan'    => 'required',
      'assesment_id'  => 'required',
      'kompetensi_id' => 'required',
      'rowscore_id'   => 'required'
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
      $pertanyaan = new Pertanyaan([
        'id'            => Uuid::generate()->string,
        'pertanyaan'    => ucfirst(trim($request->pertanyaan)),
        'assesment_id'  => trim($request->assesment_id),
        'kompetensi_id' => trim($request->kompetensi_id),
        'rowscore_id'   => trim($request->rowscore_id)
      ]);
      $pertanyaan->save();
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
      'pertanyaan'    => 'required',
      'assesment_id'  => 'required',
      'kompetensi_id' => 'required',
      'rowscore_id'   => 'required'
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
      $rowscore               = Pertanyaan::findOrFail(Crypt::decrypt($request->id));
      $rowscore->pertanyaan   = $request->pertanyaan;
      $rowscore->assesment_id = $request->assesment_id;
      $rowscore->kompetensi_id= $request->kompetensi_id;
      $rowscore->rowscore_id  = $request->rowscore_id;
      $rowscore->save();
      return response()->json(
          array(
            'response' => "success"
          )
      );
    }
  }
  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    Pertanyaan::where('id',$txtId)->delete();
    return response()->json(
      array(
        'response'  => "success"
      )
    );
  }
}
