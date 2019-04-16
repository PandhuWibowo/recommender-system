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
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\Question;
use App\Http\Models\ModelLogs\Answer;
use BrowserDetect;
/**
 * JenisAssesmentController
 */
class PertanyaanController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu Pertanyaan",
      "data"        => Session::get("email")." mengunjungi halaman Pertanyaan",
      "link"        => url()->current()
    ]);

    $logPages->save();
    $jenisAssessments = JenisAssesment::orderBy("nama","asc")->where("model","1")->get();
    $pertanyaan = Pertanyaan::orderBy("no_urut_pertanyaan")->get();
    // $pertanyaan = Pertanyaan::with("get_assesment")->with("get_kompetensi")->with("get_rowscore");
    return view("administrator.dashboard.pages.pertanyaan-page.v_index", compact("pertanyaan","jenisAssessments"));
    // echo dd($pertanyaan);
  }
// ,compact("assesments","kompetensi","rowscore")
  public function add(Request $request){
    $noUrutTerakhir   = Pertanyaan::where("assesment_id", Session::get("assesment_id"))->pluck("no_urut_pertanyaan");

    if(count($noUrutTerakhir) == 0){
      $kasihNomorUrut = 1;
    }
    else{
      $arrNoUrutTerakhir= $noUrutTerakhir->toArray();

      $maxNoUrutTerakhir= max($arrNoUrutTerakhir);
      $kasihNomorUrut = $maxNoUrutTerakhir+1;
    }

    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Add New Pertanyaan",
      "data"        => Session::get("email")." mengunjungi halaman Add New Pertanyaan",
      "link"        => url()->current()
    ]);

    $logPages->save();

    $assesments = JenisAssesment::orderBy("nama","asc")->where("model","1")->get();
    $kompetensi = Kompetensi::all();
    $rowscore   = RowScore::all();
    return view("administrator.dashboard.pages.pertanyaan-page.add-pertanyaan",compact("assesments","kompetensi","rowscore","kasihNomorUrut"));
  }

  public function show($id, Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Detail Pertanyaan",
      "data"        => Session::get("email")." mengunjungi halaman Detail Pertanyaan dengan ID : ".$id,
      "link"        => url()->current()
    ]);

    $logPages->save();

    $assesments = JenisAssesment::orderBy("nama","asc")->where("model","1")->get();
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
      Session::put('assesment_id', $request->assesment_id);
      Session::put('kompetensi_id', $request->kompetensi_id);
      Session::put('rowscore_id', $request->rowscore_id);
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

      $logPages = new Question([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Store Pertanyaan - Store|Success",
        "data"        => "Berhasil menyimpan pertanyaan baru",
        "link"        => url()->current()
      ]);

      $logPages->save();

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
      // echo dd(Crypt::decrypt($request->id));
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
      // echo dd(count($request->jawaban));
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

      $logPages = new Question([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Update Pertanyaan - Update|Success",
        "data"        => "Berhasil mengubah pertanyaan dengan ID Pertanyaan : ".$request->id,
        "link"        => url()->current()
      ]);

      $logPages->save();

      Session::flash("success","Your question has been saved");
      return Redirect::to('backend/pages/questions');
    }
  }

  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);
    $checkId  = Jawaban::where("pertanyaan_id", $txtId)->pluck("pertanyaan_id");
    if(count($checkId) > 0){
      $log = new Pertanyaan([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Cek Pertanyaan",
        "data"        => "Tidak ditemukan pertanyaan disini",
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "failed"
          // 'response'  => "success"
        )
      );
    }else{
      $data = Pertanyaan::where('id', $txtId)->first();

      if(Pertanyaan::where('id',$txtId)->delete()){
        $log = new Question([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Delete Pertanyaan - Delete|Success",
          "data"        => "Berhasil menghapus data Pertanyaan - Pertanyaan ID : ".$data->id.", Pertanyaan : ".$data->pertanyaan.", Assessment ID : ".$data->assesment_id.", Kompetensi ID : ".$data->kompetensi_id.
                            ", Row Score ID : ".$data->rowscore_id.", No Urut Pertanyaan : ".$data->no_urut_pertanyaan,
          "link"        => url()->current()
        ]);

        $log->save();

        return response()->json(
          array(
            'response'  => "success"
          )
        );
      }else{
        $log = new Question([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Delete Pertanyaan - Delete|Failed",
          "data"        => "Gagal menghapus data Pertanyaan - Pertanyaan ID : ".$data->id.", Pertanyaan : ".$data->pertanyaan.", Assessment ID : ".$data->assesment_id.", Kompetensi ID : ".$data->kompetensi_id.
                            ", Row Score ID : ".$data->rowscore_id.", No Urut Pertanyaan : ".$data->no_urut_pertanyaan,
          "link"        => url()->current()
        ]);

        $log->save();

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
      $log = new Answer([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Jawaban - Delete|Success",
        "data"        => "Berhasil menghapus data Jawaban - Jawaban ID : ".$data->id.", Pertanyaan ID : ".$data->pertanyaan_id.", Jawaban : ".$data->jawaban.", Nilai : ".$data->nilai,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      $log = new Answer([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Jawaban - Delete|Failed",
        "data"        => "Gagal menghapus data Jawaban - Jawaban ID : ".$data->id.", Pertanyaan ID : ".$data->pertanyaan_id.", Jawaban : ".$data->jawaban.", Nilai : ".$data->nilai,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "failed"
        )
      );
    }
  }
}
