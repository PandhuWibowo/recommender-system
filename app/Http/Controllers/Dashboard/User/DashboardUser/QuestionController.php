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
/**
 * UserController
 */
class QuestionController extends Controller
{
  public function store(Request $request){
    $assesmentId = $request->ass_id; $pertanyaanId = $request->pertanyaan_id;
    $jawabanId  = $request->jawaban_id; $nilai = $request->nilai;
    for($i=0;$i<count($nilai);$i++){
      $pertanyaanAssesment  = new PertanyaanAssesment([
        "id"            => Uuid::generate()->string,
        "ass_id"        => $assesmentId[$i],
        "pertanyaan_id" => $pertanyaanId[$i],
        "jawaban_id"    => $jawabanId[$i],
        "nilai"         => $nilai[$i]
      ]);

      $pertanyaanAssesment->save();
    }
    // SELECT rowscores.nama_rowscore, kompetensis.kompetensi, sum(pertanyaan_assesments.nilai) FROM `pertanyaan_assesments` JOIN pertanyaans ON pertanyaan_assesments.pertanyaan_id = pertanyaans.id JOIN jawabans ON pertanyaan_assesments.jawaban_id = jawabans.id JOIN rowscores ON rowscores.id = pertanyaans.rowscore_id JOIN kompetensis ON kompetensis.id = pertanyaans.kompetensi_id GROUP BY rowscores.no_urut_rowscore, kompetensis.no_urut_kompetensi
    //Query
    // SELECT rowscores.nama_rowscore, sum(pertanyaan_assesments.nilai) FROM `pertanyaan_assesments` JOIN pertanyaans ON pertanyaan_assesments.pertanyaan_id = pertanyaans.id JOIN jawabans ON pertanyaan_assesments.jawaban_id = jawabans.id JOIN rowscores ON rowscores.id = pertanyaans.rowscore_id GROUP BY rowscores.no_urut_rowscore


        // return $query;
        // Session::push("data", collect($query));

        //
        // redirect("user/pages/results/final")->with(['data' => $query]);
        return response()->json(
          array(
            "response"  => "success",
            "assId"     => Crypt::encrypt($assesmentId[0])
          )
        );
  }

}
