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
  public function index(Request $request){
    $jenisAssessments = JenisAssesment::orderBy("nama","asc")->get();
    $pertanyaan = Pertanyaan::all();
    return view("administrator.dashboard.pages.pertanyaan-page.v_index", compact("pertanyaan","jenisAssessments"));
  }

  public function add(Request $request){
    $assesments = JenisAssesment::orderBy("nama","asc")->get();
    $kompetensi = Kompetensi::all();
    return view("administrator.dashboard.pages.pertanyaan-page.add-pertanyaan",compact("assesments","kompetensi"));
  }

  public function show($id, Request $request){
    $assesments = JenisAssesment::orderBy("nama","asc")->get();
    $kompetensi = Kompetensi::all();
    $pertanyaan = Pertanyaan::findOrFail(Crypt::decrypt($id));
    return view("administrator.dashboard.pages.pertanyaan-page.edit-pertanyaan",compact("pertanyaan","assesments","kompetensi","rowscore"));
  }

  public function store(Request $request){
    $rules = array(
      'pertanyaan'              => 'required',
      'jenis_assessment_id'     => 'required',
      'kompetensi_id'           => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('backend/pages/questions/add')
        ->withErrors($validator);
        exit();
    }
    else{
      Session::put('tanya_assessment_id', $request->jenis_assessment_id);
      Session::put('tanya_kompetensi_id', $request->kompetensi_id);
      $pertanyaan = new Pertanyaan([
        'id'                  => Uuid::generate()->string,
        'pertanyaan'          => ucfirst(trim($request->pertanyaan)),
        'jenis_assessment_id' => trim($request->jenis_assessment_id),
        'kompetensi_id'       => trim($request->kompetensi_id),
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

      Session::flash("success","Data has been saved");
      return Redirect::to('backend/pages/questions/add');
    }
  }

  public function update(Request $request){
    $rules = array(
      'id'                  => 'required',
      'pertanyaan'          => 'required',
      'jenis_assessment_id' => 'required',
      'kompetensi_id'       => 'required',
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('backend/pages/questions/'.$request->id)
        ->withErrors($validator);
        exit();
    }
    else{
      $rowscore                       = Pertanyaan::find(Crypt::decrypt($request->id));
      $rowscore->pertanyaan           = $request->pertanyaan;
      $rowscore->jenis_assessment_id  = $request->jenis_assessment_id;
      $rowscore->kompetensi_id        = $request->kompetensi_id;
      $rowscore->save();

      $pertanyaanId                   = Crypt::decrypt($request->id);

      $hapusIdPertanyaan              = DB::table("jawabans as j")
                                          ->join("pertanyaans as q","q.id","=","j.pertanyaan_id")
                                          ->where("j.pertanyaan_id", $pertanyaanId)
                                          ->where("j.deleted_at", null)
                                          ->pluck("j.pertanyaan_id");

      for($i=0;$i<count($hapusIdPertanyaan);$i++){
        $delete = DB::table("jawabans")->where("pertanyaan_id",$hapusIdPertanyaan)->where("deleted_at", null)->delete();
      }


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

      Session::flash("success","Data has been updated");
      return Redirect::to('backend/pages/questions/'.$request->id);
    }
  }

  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    $checkId  = Jawaban::where("pertanyaan_id", $txtId)->pluck("pertanyaan_id");
    if(count($checkId) > 0){
      return response()->json(
        array(
          'response'  => "failed"
        )
      );
    }else{
      $data = Pertanyaan::where('id', $txtId)->first();

      if(Pertanyaan::where('id',$txtId)->delete()){
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

  public function search(Request $request){
    $assId        = Crypt::decrypt($request->id);
    $kompetensis  = Pertanyaan::select("kompetensi as f_k","k.id as kId")
                              ->join("jenis_assesments as ja","pertanyaans.assesment_id","=","ja.id")
                              ->join("kompetensis as k","pertanyaans.kompetensi_id","=","k.id")
                              ->where("pertanyaans.assesment_id", $assId)
                              ->distinct()
                              ->orderBy("f_k","asc")
                              ->get();
      echo $output = '<option selected disabled>Please select competencies</option>';

    foreach ($kompetensis as $key => $value) {
      $output = '<option value="'.Crypt::encrypt($value->kId).'">'.$value->f_k.'</option>';
      echo $output;
    }
  }

  public function search2(Request $request){
    $assId        = Crypt::decrypt($request->id);
    $rawscores    = Pertanyaan::select("nama_rowscore as nr","r.id as rId")
                              ->join("kompetensis as k","pertanyaans.kompetensi_id","=","k.id")
                              ->join("rowscores as r","pertanyaans.rowscore_id","=","r.id")
                              ->where("pertanyaans.kompetensi_id", $assId)
                              ->distinct()
                              ->orderBy("nr","asc")
                              ->get();
    echo $output = '<option selected disabled>Please select raw scores</option>';
    foreach ($rawscores as $key => $value) {
      $output = '<option value="'.Crypt::encrypt($value->rId).'">'.$value->nr.'</option>';
      echo $output;
    }
  }

  public function search3($assessment_id, $kompetensi_id, $rawscore_id){
    $output    = Pertanyaan::select("pertanyaan","nama","kompetensi","nama_rowscore","pertanyaans.id as pId")
                              ->join("jenis_assesments as ja","pertanyaans.assesment_id","=","ja.id")
                              ->join("kompetensis as k","pertanyaans.kompetensi_id","=","k.id")
                              ->join("rowscores as r","pertanyaans.rowscore_id","=","r.id")
                              ->where("pertanyaans.assesment_id", Crypt::decrypt($assessment_id))
                              ->where("pertanyaans.kompetensi_id", Crypt::decrypt($kompetensi_id))
                              ->where("pertanyaans.rowscore_id", Crypt::decrypt($rawscore_id))
                              ->orderBy("no_urut_pertanyaan")
                              ->get();
    $jenisAssessments = JenisAssesment::orderBy("nama","asc")->get();

    return view("administrator.dashboard.pages.pertanyaan-page.v_filter", compact("output","jenisAssessments"));
  }


  public function destroyAnswer(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    $data = Jawaban::where('id', $txtId)->first();

    if(Jawaban::where('id',$txtId)->delete()){
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
