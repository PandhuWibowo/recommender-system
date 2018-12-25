<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
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
class RowScoreController extends Controller
{
  public function index(){
    $rowscore = RowScore::all();
    return view("administrator.dashboard.pages.rowscore-page.v_index", compact("rowscore"));
  }

  public function store(Request $request){
    $rules = array(
      'nama_rowscore'   => 'required',
      'nama_singkat'    => 'required',
      'presentase'      => 'required'
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
      $rowscore = new RowScore([
        'id'        => Uuid::generate()->string,
        'nama_rowscore' => ucfirst(trim($request->nama_rowscore)),
        'nama_singkat'  => ucfirst(trim($request->nama_singkat)),
        'presentase'    => trim($request->presentase)
      ]);
      $rowscore->save();
      return response()->json(
          array(
            'response' => "success"
          )
      );
    }
  }

  public function update(Request $request){
    $rules = array(
      'id'              => 'required',
      'nama_rowscore'   => 'required',
      'nama_singkat'    => 'required',
      'presentase'      => 'required'
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
      $rowscore        = RowScore::findOrFail(Crypt::decrypt($request->id));
      $rowscore->nama_rowscore  = $request->nama_rowscore;
      $rowscore->nama_singkat   = $request->nama_singkat;
      $rowscore->presentase     = $request->presentase;
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
    RowScore::where('id',$txtId)->delete();
    return response()->json(
      array(
        'response'  => "success"
      )
    );
  }
}
