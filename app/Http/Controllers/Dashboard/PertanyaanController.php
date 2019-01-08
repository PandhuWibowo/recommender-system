<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\Pertanyaan;
use App\Http\Models\Jawaban;
use App\Http\Models\JenisAssesment;
use App\Http\Models\PertanyaanAssesment;
use App\Http\Models\Kompetensi;
use App\Http\Models\RowScore;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use DB;
/**
 * JenisAssesmentController
 */
class PertanyaanController extends Controller
{
  public function index(){
    $pertanyaan = Pertanyaan::all();
    // $pertanyaan = Pertanyaan::with("get_assesment")->with("get_kompetensi")->with("get_rowscore");
    return view("administrator.dashboard.pages.pertanyaan-page.v_index", compact("pertanyaan"));
    // echo dd($pertanyaan);
  }
// ,compact("assesments","kompetensi","rowscore")
  public function add(){
    $assesments = JenisAssesment::all();
    $kompetensi = Kompetensi::all();
    $rowscore   = RowScore::all();
    return view("administrator.dashboard.pages.pertanyaan-page.add-pertanyaan",compact("assesments","kompetensi","rowscore"));
  }

  public function show($id){
    $assesments = JenisAssesment::all();
    $kompetensi = Kompetensi::all();
    $rowscore   = RowScore::all();
    $pertanyaan = Pertanyaan::findOrFail(Crypt::decrypt($id));
    return view("administrator.dashboard.pages.pertanyaan-page.edit-pertanyaan",compact("pertanyaan","assesments","kompetensi","rowscore"));
  }

  public function store(Request $request){
    $rules = array(
      'pertanyaan'        => 'required',
      'assesment_id'      => 'required',
      'kompetensi_id'     => 'required',
      'rowscore_id'       => 'required',
      'no_urut_pertanyaan'=> 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('backend/pages/questions')
        ->withErrors($validator);
        exit();
    }
    else{

      $pertanyaan = new Pertanyaan([
        'id'                => Uuid::generate()->string,
        'pertanyaan'        => ucfirst(trim($request->pertanyaan)),
        'assesment_id'      => trim($request->assesment_id),
        'kompetensi_id'     => trim($request->kompetensi_id),
        'rowscore_id'       => trim($request->rowscore_id),
        'no_urut_pertanyaan'=> trim($request->no_urut_pertanyaan)
      ]);
      $pertanyaan->save();

      $pertanyaan->id;

      for($i=0;$i<count($request->jawaban);$i++){
        if($request->jawaban[$i] == "" && $request->nilai[$i] == ""){
          continue;
        }else{
          $jawaban  = new Jawaban([
            'id'            => Uuid::generate()->string,
            'pertanyaan_id' => $pertanyaan->id,
            'jawaban'       => $request->jawaban[$i],
            'nilai'         => $request->nilai[$i]
          ]);

          $jawaban->save();
        }
      }
      Session::flash("success","Your question has been saved");
      return Redirect::to('backend/pages/questions');
    }
  }

  public function update(Request $request){
    $rules = array(
      'id'                => 'required',
      'pertanyaan'        => 'required',
      'assesment_id'      => 'required',
      'kompetensi_id'     => 'required',
      'rowscore_id'       => 'required',
      'no_urut_pertanyaan'=> 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('backend/pages/questions'.$request->id)
        ->withErrors($validator);
        exit();
    }
    else{
      $rowscore                     = Pertanyaan::find(Crypt::decrypt($request->id));
      $rowscore->pertanyaan         = $request->pertanyaan;
      $rowscore->assesment_id       = $request->assesment_id;
      $rowscore->kompetensi_id      = $request->kompetensi_id;
      $rowscore->rowscore_id        = $request->rowscore_id;
      $rowscore->no_urut_pertanyaan = $request->no_urut_pertanyaan;
      $rowscore->save();

      $pertanyaanId           = Crypt::decrypt($request->id);

      $hapusIdPertanyaan      = DB::table("jawabans as j")
                                  ->join("pertanyaans as q","q.id","=","j.pertanyaan_id")
                                  ->where("j.pertanyaan_id", $pertanyaanId)
                                  ->where("j.deleted_at", null)
                                  ->pluck("j.pertanyaan_id");

      DB::table("jawabans")->where("pertanyaan_id",$hapusIdPertanyaan)->where("deleted_at", null)->delete();

      for($i=0;$i<count($request->jawaban);$i++){
        if($request->jawaban[$i] == "" && $request->nilai[$i] == ""){
          continue;
        }else{
          $jawaban  = new Jawaban([
            'id'            => Uuid::generate()->string,
            'pertanyaan_id' => $pertanyaanId,
            'jawaban'       => $request->jawaban[$i],
            'nilai'         => $request->nilai[$i]
          ]);

          $jawaban->save();
        }
      }
      Session::flash("success","Your question has been saved");
      return Redirect::to('backend/pages/questions');
      // $jawaban                = Jawaban::findOrFail(Crypt::decrypt($request->jawaban_id));
      // $jawaban->jawaban       = $request->jawaban;
      // $jawaban->nilai         = $request->nilai;

      // $jawaban->save();
      //
      // $rowscore->save();
      // return response()->json(
      //     array(
      //       'response' => "success"
      //     )
      // );
    }
  }

  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    $checkId  = Jawaban::where("pertanyaan_id", $txtId)->pluck("pertanyaan_id");
    if(count($checkId) > 0){
      return response()->json(
        array(
          'response'  => "failed"
          // 'response'  => "success"
        )
      );
    }else{
      Pertanyaan::where('id',$txtId)->delete();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }

  }

  public function destroyAnswer(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    Jawaban::where('id',$txtId)->delete();
    return response()->json(
      array(
        'response'  => "success"
      )
    );
  }
}
