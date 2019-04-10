<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\JenisAssesment;
use App\Http\Models\SelfhoodJawaban;
use App\Http\Models\SelfhoodPertanyaan;
use App\Http\Models\Personality;
use App\Http\Models\Pertanyaan;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use DB;
use App\Http\Models\ModelLogs\DirectPage;
use BrowserDetect;

/**
 * SelfhoodQuestionController
 */
class SelfhoodQuestionController extends Controller
{
  public function index(){
    $questions = SelfhoodPertanyaan::with("getJawabans")->orderBy("no_urut_pertanyaan","asc")->get();

    return view("administrator.dashboard.pages.pertanyaan-kepribadian-page.v_index", compact("questions"));
  }

  public function edit($assessmentId, $pertanyaanKepribadianId){
    $decryptAssessmentId            = Crypt::decrypt($assessmentId);
    $decryptPertanyaanKepribadianId = Crypt::decrypt($pertanyaanKepribadianId);
    $jenisAssessments               = JenisAssesment::orderBy("created_at","asc")->get();
    $persons                        = Personality::orderBy("created_at","asc")->get();
    $editSoal                       = SelfhoodPertanyaan::join("jawaban_kepribadians as jk","pertanyaan_kepribadians.id","=","jk.selfhood_pertanyaan_id")
                                                        ->where("id", $decryptPertanyaanKepribadianId)
                                                        ->where("pertanyaan_kepribadians.assessment_id", $decryptAssessmentId)
                                                        ->first();
    // dd($editSoal);
    $jenisKepByAssId                = Personality::where("assessment_id", $decryptAssessmentId)->get();

    // dd($jenisKepByAssId);
    return view("administrator.dashboard.pages.pertanyaan-kepribadian-page.detail.v_view-update", compact("jenisAssessments","persons","questions","assessmentId","pertanyaanKepribadianId","editSoal","jenisKepByAssId"));
  }

  public function add(){
    $jenisAssessments = JenisAssesment::orderBy("created_at","asc")->get(); //TODO: mengeluarkan jenis assessment
    $persons          = Personality::orderBy("created_at","asc")->get(); //TODO: mengeluarkan personality
    $noUrutTerakhir   = SelfhoodPertanyaan::where("assessment_id", Session::get("assesment_id"))->pluck("no_urut_pertanyaan");

    if(count($noUrutTerakhir) == 0){
      $kasihNomorUrut = 1;
    }
    else{
      $arrNoUrutTerakhir= $noUrutTerakhir->toArray();

      $maxNoUrutTerakhir= max($arrNoUrutTerakhir);
      $kasihNomorUrut = $maxNoUrutTerakhir+1;
    }

    return view("administrator.dashboard.pages.pertanyaan-kepribadian-page.v_view-add", compact("jenisAssessments","persons","questions","kasihNomorUrut"));
  }

  // TODO: filtering assessment_id untuk kepribadian_id
  public function filterKepribadian(Request $request){
    $assId        = Crypt::decrypt($request->id);
    $kepribadians  = Personality::where("assessment_id", $assId)->orderBy("nama","asc")->get();
    foreach ($kepribadians as $key => $value) {
      $output = '<option value="'.Crypt::encrypt($value->id).'">'.$value->nama.'</option>';
      echo $output;
    }
  }

  // public function validation(Request $request){
  //   $varAssessmentId    = Crypt::decrypt($request->id);
  //   $tablesPertanyaan1  = Pertanyaan::where("assesment_id", $varAssessmentId)->count();
  //   $tablesPertanyaan2  = SelfhoodPertanyaan::where("assessment_id", $varAssessmentId)->count();
  //
  //   if($tablesPertanyaan1 > 0 || $tablesPertanyaan2 > 0){
  //     return response()->json(
  //         array(
  //           "response"  => "exist"
  //         )
  //     );
  //   }
  // }

  public function store(Request $request){
    $rules = array(
      'kepribadian_id'    => 'required',
      'assesment_id'      => 'required',
      'no_urut_pertanyaan'=> 'required',
      'opsi_jawaban'      => 'required',
      'code_opsi_jawaban' => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('backend/pages/selfhood/questions')
        ->withErrors($validator);
        exit();
    }
    else{
      Session::put('assesment_id', Crypt::decrypt($request->assesment_id));
      $pertanyaan = new SelfhoodPertanyaan([
        'id'                => Uuid::generate()->string,
        // 'nama'              => ucfirst(trim($request->nama)),
        'assessment_id'     => trim(Crypt::decrypt($request->assesment_id)),
        // 'kode_nama'         => ucfirst(trim($request->kode_nama)),
        'no_urut_pertanyaan'=> trim($request->no_urut_pertanyaan)
      ]);

      $pertanyaan->save();

      for($i=0;$i<count($request->opsi_jawaban);$i++){
        if($request->opsi_jawaban[$i] == "" && $request->code_opsi_jawaban[$i] == ""){
          continue;
        }else{
          $noUrutTerakhir   = SelfhoodJawaban::where("assessment_id", Session::get("assesment_id"))->pluck("no_urut_jawaban_kepribadian");

          if(count($noUrutTerakhir) == 0){
            $kasihNomorUrut = 1;
          }
          else{
            $arrNoUrutTerakhir= $noUrutTerakhir->toArray();

            $maxNoUrutTerakhir= max($arrNoUrutTerakhir);
            $kasihNomorUrut = $maxNoUrutTerakhir+1;
          }
          $jawaban  = new SelfhoodJawaban([
            // 'id'                => Uuid::generate()->string,
            'kepribadian_id'              => Crypt::decrypt($request->kepribadian_id[$i]),
            'selfhood_pertanyaan_id'      => $pertanyaan->id,
            'assessment_id'               => trim(Crypt::decrypt($request->assesment_id)),
            'opsi_jawaban'                => $request->opsi_jawaban[$i],
            'code_opsi_jawaban'           => $request->code_opsi_jawaban[$i],
            'no_urut_jawaban_kepribadian' => $kasihNomorUrut
          ]);

          $jawaban->save();
        }
      }

      // $logPages = new Question([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Store Pertanyaan - Store|Success",
      //   "data"        => "Berhasil menyimpan pertanyaan baru",
      //   "link"        => url()->current()
      // ]);
      //
      // $logPages->save();

      Session::flash("success","Your question has been saved");
      return Redirect::to('backend/pages/selfhood/questions');
    }
  }

  public function update(Request $request){
    $rules = array(
      // 'kepribadian_id'    => 'required',
      'assesment_id'      => 'required',
      'no_urut_pertanyaan'=> 'required',
      // 'opsi_jawaban'      => 'required',
      // 'code_opsi_jawaban' => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('backend/pages/selfhood/questions')
        ->withErrors($validator);
        exit();
    }
    else{
      $questions                      = SelfhoodPertanyaan::find(Crypt::decrypt($request->id));
      $questions->assessment_id       = Crypt::decrypt($request->assesment_id);
      $questions->no_urut_pertanyaan  = $request->no_urut_pertanyaan;
      $questions->save();

      SelfhoodJawaban::where("selfhood_pertanyaan_id", Crypt::decrypt($request->id))->delete();

      for($i=0;$i<count($request->opsi_jawaban);$i++){
        if($request->opsi_jawaban[$i] == "" && $request->code_opsi_jawaban[$i] == ""){
          continue;
        }else{
          $queryNoUrut      = SelfhoodJawaban::select("no_urut_jawaban_kepribadian")->where("assessment_id", Crypt::decrypt($request->assesment_id))->get(); //TODO: membuat nomor urut

          if(count($queryNoUrut) == 0){
            $kasihNomorUrut = 1;
          }
          $jawaban  = new SelfhoodJawaban([
            // 'id'                => Uuid::generate()->string,
            'kepribadian_id'              => Crypt::decrypt($request->kepribadian_id[$i]),
            'selfhood_pertanyaan_id'      => Crypt::decrypt($request->id),
            'assessment_id'               => trim(Crypt::decrypt($request->assesment_id)),
            'opsi_jawaban'                => $request->opsi_jawaban[$i],
            'code_opsi_jawaban'           => $request->code_opsi_jawaban[$i],
            'no_urut_jawaban_kepribadian' => $kasihNomorUrut+$i
          ]);

          $jawaban->save();
        }
      }

      // dd(Crypt::decrypt($request->assesment_id));

      Session::flash("success","Your question has been saved");
      return Redirect::to('backend/pages/selfhood/questions');
    }
  }

  public function destroy(Request $request){
    $varPertanyaanId          = Crypt::decrypt($request->id);
    // $varAssessmentId          = Crypt::decrypt($request->assessment_id);
    // $varSelfhoodPertanyaanId  = Crypt::decrypt($request->selfhood_pertanyaan_id);
    // $varKepribadianId         = Crypt::decrypt($request->kepribadian_id);
    $checkId                  = SelfhoodJawaban::where('selfhood_pertanyaan_id', $varPertanyaanId)->pluck("selfhood_pertanyaan_id");
    if(count($checkId) > 0){
      // $log = new Pertanyaan([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Cek Pertanyaan",
      //   "data"        => "Tidak ditemukan pertanyaan disini",
      //   "link"        => url()->current()
      // ]);
      //
      // $log->save();
      return response()->json(
        array(
          'response'  => "failed"
          // 'response'  => "success"
        )
      );
    }else{
      $data = SelfhoodPertanyaan::where('id', $varPertanyaanId)->first();

      if(SelfhoodPertanyaan::where('id',$varPertanyaanId)->delete()){
        // $log = new Question([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Delete Pertanyaan - Delete|Success",
        //   "data"        => "Berhasil menghapus data Pertanyaan - Pertanyaan ID : ".$data->id.", Pertanyaan : ".$data->pertanyaan.", Assessment ID : ".$data->assesment_id.", Kompetensi ID : ".$data->kompetensi_id.
        //                     ", Row Score ID : ".$data->rowscore_id.", No Urut Pertanyaan : ".$data->no_urut_pertanyaan,
        //   "link"        => url()->current()
        // ]);
        //
        // $log->save();

        return response()->json(
          array(
            'response'  => "success"
          )
        );
      }else{
        // $log = new Question([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Delete Pertanyaan - Delete|Failed",
        //   "data"        => "Gagal menghapus data Pertanyaan - Pertanyaan ID : ".$data->id.", Pertanyaan : ".$data->pertanyaan.", Assessment ID : ".$data->assesment_id.", Kompetensi ID : ".$data->kompetensi_id.
        //                     ", Row Score ID : ".$data->rowscore_id.", No Urut Pertanyaan : ".$data->no_urut_pertanyaan,
        //   "link"        => url()->current()
        // ]);
        //
        // $log->save();

        return response()->json(
          array(
            'response'  => "failed"
          )
        );
      }

    }
  }

  public function destroyAnswer(Request $request){
    $varAssessmentId          = Crypt::decrypt($request->assessment_id);
    $varSelfhoodPertanyaanId  = Crypt::decrypt($request->selfhood_pertanyaan_id);
    $varKepribadianId         = Crypt::decrypt($request->kepribadian_id);

    $data = SelfhoodJawaban::where('assessment_id', $varAssessmentId)->where("selfhood_pertanyaan_id", $varSelfhoodPertanyaanId)->where("kepribadian_id", $varKepribadianId)->first();

    if(SelfhoodJawaban::where('assessment_id', $varAssessmentId)->where("selfhood_pertanyaan_id", $varSelfhoodPertanyaanId)->where("kepribadian_id", $varKepribadianId)->delete()){
      // $log = new Answer([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Delete Jawaban - Delete|Success",
      //   "data"        => "Berhasil menghapus data Jawaban - Jawaban ID : ".$data->id.", Pertanyaan ID : ".$data->pertanyaan_id.", Jawaban : ".$data->jawaban.", Nilai : ".$data->nilai,
      //   "link"        => url()->current()
      // ]);
      //
      // $log->save();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      // $log = new Answer([
      //   "user_id"     => Session::get("id"),
      //   "ip_address"  => $request->ip(),
      //   "browser"     => BrowserDetect::browserName(),
      //   "action"      => "Delete Jawaban - Delete|Failed",
      //   "data"        => "Gagal menghapus data Jawaban - Jawaban ID : ".$data->id.", Pertanyaan ID : ".$data->pertanyaan_id.", Jawaban : ".$data->jawaban.", Nilai : ".$data->nilai,
      //   "link"        => url()->current()
      // ]);
      //
      // $log->save();
      return response()->json(
        array(
          'response'  => "failed"
        )
      );
    }
  }
}
