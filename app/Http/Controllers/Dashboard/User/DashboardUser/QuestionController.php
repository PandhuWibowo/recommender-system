<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\JenisAssesment;
use App\Http\Models\Assesment;
use App\Http\Models\Pertanyaan;
use App\Http\Models\PertanyaanAssesment;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\LogUserAnswer;
use App\Http\Models\ModelLogs\LogUserMC;
use BrowserDetect;
/**
 * UserController
 */
class QuestionController extends Controller
{
  public function store(Request $request){
    $assesmentId      = $request->ass_id;
    $pertanyaanId     = $request->pertanyaan_id;
    $jawabanId        = $request->jawaban_id;
    $nilai            = $request->nilai;

    $check = PertanyaanAssesment::where("ass_id", $assesmentId)->where("pertanyaan_id", $pertanyaanId)->get();

    if(count($check) <= 0){
      $pertanyaanAssesment  = new PertanyaanAssesment([
        "id"            => Uuid::generate()->string,
        "ass_id"        => $assesmentId,
        "pertanyaan_id" => $pertanyaanId,
        "jawaban_id"    => $jawabanId,
        "nilai"         => $nilai
      ]);

      if($pertanyaanAssesment->save()){
        $logPages = new LogUserMC([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Store Jawaban PG|Success",
          "data"        => Session::get("email")." berhasil menyimpan jawaban ".$pertanyaanAssesment->id." - ".$jawabanId,
          "link"        => url()->current()
        ]);

        $logPages->save();

        return response()->json(
          array(
            "response"  => "success:store"
          )
        );
      }else{
        $logPages = new LogUserMC([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Store Jawaban PG|Failed",
          "data"        => Session::get("email")." gagal menyimpan jawaban ".$jawabanId,
          "link"        => url()->current()
        ]);

        $logPages->save();
        return response()->json(
          array(
            "response"  => "failed:store"
          )
        );
      }
    }else{
      $pertanyaanAssesment = PertanyaanAssesment::where("ass_id", $assesmentId)->where("pertanyaan_id", $pertanyaanId)->first();
      $pertanyaanAssesment->jawaban_id = $jawabanId;

      if($pertanyaanAssesment->save()){
        $logPages = new LogUserMC([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Jawaban PG|Success",
          "data"        => Session::get("email")." berhasil mengubah jawaban ".$jawabanId,
          "link"        => url()->current()
        ]);

        $logPages->save();
        return response()->json(
          array(
            "response"  => "success:update"
          )
        );
      }
      else{
        $logPages = new LogUserMC([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Jawaban PG|Failed",
          "data"        => Session::get("email")." gagal mengubah jawaban ".$jawabanId,
          "link"        => url()->current()
        ]);
        return response()->json(
          array(
            "response"  => "failed:update"
          )
        );
      }
    }
  }

  public function storeJawaban(Request $request){
    $assesmentId      = $request->ass_id;
    $pertanyaanId     = $request->pertanyaan_id;
    $jawabanId        = $request->jawaban_id;
    $nilai            = $request->nilai;

    $check = PertanyaanAssesment::where("ass_id", $assesmentId)->where("pertanyaan_id", $pertanyaanId)->get();

    if(count($check) <= 0){
      $pertanyaanAssesment  = new PertanyaanAssesment([
        "id"            => Uuid::generate()->string,
        "ass_id"        => $assesmentId,
        "pertanyaan_id" => $pertanyaanId,
        "jawaban_id"    => $jawabanId,
        "nilai"         => $nilai
      ]);

      if($pertanyaanAssesment->save()){
        // $logPages = new LogUserMC([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Store Jawaban PG|Success",
        //   "data"        => Session::get("email")." berhasil menyimpan jawaban ".$pertanyaanAssesment->id." - ".$jawabanId,
        //   "link"        => url()->current()
        // ]);
        //
        // $logPages->save();

        return response()->json(
          array(
            "response"  => "success:store"
          )
        );
      }else{
        // $logPages = new LogUserMC([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Store Jawaban PG|Failed",
        //   "data"        => Session::get("email")." gagal menyimpan jawaban ".$jawabanId,
        //   "link"        => url()->current()
        // ]);
        //
        // $logPages->save();
        return response()->json(
          array(
            "response"  => "failed:store"
          )
        );
      }
    }else{
      $pertanyaanAssesment = PertanyaanAssesment::where("ass_id", $assesmentId)->where("pertanyaan_id", $pertanyaanId)->first();
      $pertanyaanAssesment->jawaban_id = $jawabanId;

      if($pertanyaanAssesment->save()){
        // $logPages = new LogUserMC([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Update Jawaban PG|Success",
        //   "data"        => Session::get("email")." berhasil mengubah jawaban ".$jawabanId,
        //   "link"        => url()->current()
        // ]);
        //
        // $logPages->save();
        return response()->json(
          array(
            "response"  => "success:update"
          )
        );
      }
      else{
        // $logPages = new LogUserMC([
        //   "user_id"     => Session::get("id"),
        //   "ip_address"  => $request->ip(),
        //   "browser"     => BrowserDetect::browserName(),
        //   "action"      => "Update Jawaban PG|Failed",
        //   "data"        => Session::get("email")." gagal mengubah jawaban ".$jawabanId,
        //   "link"        => url()->current()
        // ]);

        // $logPages->save();

        return response()->json(
          array(
            "response"  => "failed:update"
          )
        );
      }
    }
  }

  public function updateCacheInfo(Request $request){
    $modalInfo  = $request->modal_info;
    $assId      = $request->id;

    $updateAssessmentCache = Assesment::find($assId);
    $updateAssessmentCache->modal_info = $modalInfo;

    $updateAssessmentCache->save();

    return response()->json(
        array(
          "response" => "success"
        )
    );

  }

  public function update(Request $request){
    $assesmentId  = $request->id;
    $selesai      = $request->selesai;


    $statusAssessment = Assesment::find($assesmentId);
    $statusAssessment->selesai = $selesai;

    $statusAssessment->save();

    // for($i=0;$i<count($nilai);$i++){
    //
    // }
    // SELECT rowscores.nama_rowscore, kompetensis.kompetensi, sum(pertanyaan_assesments.nilai) FROM `pertanyaan_assesments` JOIN pertanyaans ON pertanyaan_assesments.pertanyaan_id = pertanyaans.id JOIN jawabans ON pertanyaan_assesments.jawaban_id = jawabans.id JOIN rowscores ON rowscores.id = pertanyaans.rowscore_id JOIN kompetensis ON kompetensis.id = pertanyaans.kompetensi_id GROUP BY rowscores.no_urut_rowscore, kompetensis.no_urut_kompetensi
    //Query
    // SELECT rowscores.nama_rowscore, sum(pertanyaan_assesments.nilai) FROM `pertanyaan_assesments` JOIN pertanyaans ON pertanyaan_assesments.pertanyaan_id = pertanyaans.id JOIN jawabans ON pertanyaan_assesments.jawaban_id = jawabans.id JOIN rowscores ON rowscores.id = pertanyaans.rowscore_id GROUP BY rowscores.no_urut_rowscore


        // return $query;
        // Session::push("data", collect($query));

        //
        // redirect("user/pages/results/final")->with(['data' => $query]);
    $logPages = new LogUserAnswer([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Update End Status Update|Success",
      "data"        => Session::get("email")." berhasil menyelesaikan jawaban",
      "link"        => url()->current()
    ]);

    $logPages->save();

    return response()->json(
      array(
        "response"  => "success",
        "assId"     => Crypt::encrypt($assesmentId)
      )
    );
  }

}
