<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\Assesment;
use App\Http\Models\KeteranganNilai;
use App\Http\Models\PertanyaanAssesment;
use App\Http\Models\Kompetensi;
use App\Http\Models\HasilAssKom;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;
/**
 * HistoriesController
 */
class HistoriesController extends Controller
{
  public function index(Request $request){
    $histories = Assesment::where("selesai","1")->get();
    return view("administrator.dashboard.pages.logtest.v_index", compact("histories"));
  }

  public function show($id, Request $request){

    $assessmentId     = Crypt::decrypt($id);

    // TODO: Menampilkan Nilai Jawaban dan Kompetensi Berdasarkan Assessment ID - Session
    $sql              = PertanyaanAssesment::where("assessment_id", $assessmentId)
                                      ->select("k.kompetensi as kKom","detail_pertanyaans_assessments.nilai as dpaNilai")
                                      ->join("pertanyaans as p","p.id","=","detail_pertanyaans_assessments.pertanyaan_id")
                                      ->join("kompetensis as k","k.id","=","p.kompetensi_id")
                                      ->get();


    // TODO: Menampilkan keterangan bobot nilai
    $rangeScore             = KeteranganNilai::orderBy("range_score")->get();

    $countSiswaTarget       = count($sql);

    $userAssessmentTraining = Assesment::where("selesai", "1")->orderBy("created_at","desc")->get();
    $nullMessage            = "";

    //TODO: Array hasil similarity
    $arrSim = array();

    //TODO: Cek jika datanya cuma satu - Cold Start - Tidak bisa merekomendasikan jika datanya cuma satu
    if(count($userAssessmentTraining) == 1){
      $flag         = "1";
      $noRecommend  = $this->thereIsNoData();

      echo $this->tanpaRekomendasi($sql, $rangeScore, $id, $noRecommend, $flag);
    }else{
      //TODO: Menampilkan dan filter jumlah assessment_id
      $arrayUserAssessmentTraining  = array(); //Collect Assessment Id
      foreach($userAssessmentTraining as $uat){
        if($uat->id != $assessmentId){
          $arrayUserAssessmentTraining[]  = $uat->id;
        }
      }

      $arrayOtherSiswa            = array();

      //TODO: Menampilkan hasil dari table detail_pertanyaans_assessments berdasarkan assessment_id
      for($i = 0; $i < count($arrayUserAssessmentTraining); $i++){
        $sqlOtherUser              = PertanyaanAssesment::where("assessment_id", $arrayUserAssessmentTraining[$i])
                                          ->select("detail_pertanyaans_assessments.assessment_id as dpaAssIdOther","detail_pertanyaans_assessments.nilai as dpaNilaiOther","k.kompetensi as kKomOther","u.firstname as uF","u.lastname as uL")
                                          ->join("pertanyaans as p","p.id","=","detail_pertanyaans_assessments.pertanyaan_id")
                                          ->join("kompetensis as k","k.id","=","p.kompetensi_id")
                                          //Tambahin query ini
                                          ->join("assessments as ass","detail_pertanyaans_assessments.assessment_id","=","ass.id")
                                          ->join("users as u","ass.user_id","=","u.id")
                                          ->get();

        //TODO: Menampilkan list nilai siswa target
        $arraySiswaTarget           = array(); //Collect nilai siswa target atau session yang aktif sekarang
        $arrayKompetensiOtherSiswa  = array();

        //Menampilkan nilai untuk dimasukkan ke dalam variable array $arraySiswaTarget
        foreach($sql as $row){
          $arraySiswaTarget[]           = $row->dpaNilai;
          $arrayKompetensiSiswaTarget[] = $row->kKom;
        }

        //TODO: Count sql other user
        $arrayCountDpaNilai         = array(); //Collect nilai siswa dari dataset
        $arrayKompetensiOtherSiswa  = array();
        $arrayNamaOtherSiswa        = array();
        $arrayOtherAssId            = array();
        // TODO: Menampilkan nilai daripada siswa lain
        foreach($sqlOtherUser as $key=>$row2){
          $arrayCountDpaNilai[]         = $row2->dpaNilaiOther;
          $arrayKompetensiOtherSiswa[]  = $row2->kKomOther;
          $arrayNamaOtherSiswa[]        = $row2->uF." ".$row2->uL;
          $arrayOtherAssId[]            = $row2->dpaAssIdOther;
        }
        $distinct = array_unique($arrayOtherAssId);

        for($countAssId = 0; $countAssId < count($distinct); $countAssId++){

          $tmpHasil = array();

          $tmpToArray=0;
          if($countSiswaTarget == count($arrayCountDpaNilai)){
            //TODO: Panggil fungsi similarity
            $tmpToArray = $this->pearsonCorrelationCoefficient($arraySiswaTarget, $arrayCountDpaNilai, $countSiswaTarget); //TODO: Menampilkan hasil similarity
            $countOtherSiswa = count($arrayKompetensiOtherSiswa);

            $tmpHasil[$arrayOtherAssId[$countAssId]] = array(
              $arrayNamaOtherSiswa[$countAssId] => $tmpToArray
            );


            // if($tmpToArray > 0){
            //   for($countArray = 0; $countArray < $countOtherSiswa; $countArray++){
            //     if($arrayKompetensiSiswaTarget[$countArray] == $arrayKompetensiOtherSiswa[$countArray] && $arrayCountDpaNilai[$countArray] > $arraySiswaTarget[$countArray]){
            //       //Menampilkan hasil dari kompetensi siswa lain disini
            //       echo "<br>";
            //       echo $arrayKompetensiOtherSiswa[$countArray]."<br>";
            //     }
            //   }
            // }

            // $arrSim[] = $tmpToArray;
            // array_multisort($arrSim, SORT_DESC);
            // rsort($arrSim);
          }
        }

        echo print_r($tmpHasil);

        // foreach($tmpHasil as $keyAssId=>$values){
        //   echo "<br>";
        //   echo $keyAssId."<br>";
        // }
      }

      //TODO: Menampilkan data keseluruhan
      // echo print_r($arrSim);

      //TODO: Disini penempatannya
      // Bagian memilih nilai terdekat dari hasil sorting hitung similarity
      //Start
      // $total            = (count($arrSim) * 30)/100; //TODO: total * 30/100
      //
      // $pembulatanTotal  = ceil($total); //TODO: Pembulatan keatas
      // $tmpAssessmentId  = array();
      // $no=1;
      // for($j=0;$j<count($arrSim);$j++){
      //   if($no <= $pembulatanTotal){
      //     // TODO: Menampilkan hasil kompetensi dengan nilai diambil dari pertanyaan
      //     $sqlResult  = $this->showKompetensiQuery();
      //
      //     // TODO: Count Query Hasil
      //     $countSqlResult = count($sqlResult);
      //
      //   }
      //   $no++;
      // }
      //End

      // return view("administrator.dashboard.pages.logtest.v_detail", compact("sql","rangeScore","id","nullMessage"));
    }
    //Bagian Akhir Else
  }

  // TODO: pearson correlation coefficient. *Method*
  public function pearsonCorrelationCoefficient($X, $Y, $n)
  {
      $sum_X = 0;$sum_Y = 0; $sum_XY = 0;
      $squareSum_X = 0; $squareSum_Y = 0;

      for ($i = 0; $i < $n; $i++)
      {
          // sum of elements of array X.
          $sum_X = $sum_X + $X[$i];

          // sum of elements of array Y.
          $sum_Y = $sum_Y + $Y[$i];

          // sum of X[i] * Y[i].
          $sum_XY = $sum_XY + $X[$i] * $Y[$i];

          // sum of square of array elements.
          $squareSum_X = $squareSum_X +
                         $X[$i] * $X[$i];
          $squareSum_Y = $squareSum_Y +
                         $Y[$i] * $Y[$i];
      }

      // use formula for calculating
      // pearson correlation coefficient formula
      $corr = (float)($n * $sum_XY - $sum_X * $sum_Y) /
           sqrt(($n * $squareSum_X - $sum_X * $sum_X) *
                ($n * $squareSum_Y - $sum_Y * $sum_Y));

      return $corr;
  }

  public function showKompetensiQuery(){
    $sqlResult  = PertanyaanAssesment::select("k.kompetensi as kKomFinal","detail_pertanyaans_assessments.nilai as dpaNilaiFinal","k.id as kIdFinal","detail_pertanyaans_assessments.pertanyaan_id as dpaPIdFinal","p.id as pIdFinal","detail_pertanyaans_assessments.assessment_id as dpaAIdFinal")
                              ->join("pertanyaans as p","detail_pertanyaans_assessments.pertanyaan_id","=","p.id")
                              ->join("kompetensis as k","p.kompetensi_id","=","k.id")
                              ->get();

    return $sqlResult;
  }

  // TODO: Jika assessment yang dihasilkan baru 1
  public function tanpaRekomendasi($sql, $rangeScore, $id, $noRecommend, $flag){
    $sql        = $sql;
    $rangeScore = $rangeScore;
    $id         = $id;
    return view("administrator.dashboard.pages.logtest.v_detail", compact("sql","rangeScore","id","noRecommend","flag"));
  }

  public function thereIsNoData(){
    return "Tidak ada yang direkomendasikan untuk Anda";
  }

}
