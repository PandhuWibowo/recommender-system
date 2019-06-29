<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\Assesment;
use App\Http\Models\KeteranganNilai;
use App\Http\Models\HasilAssKom;
use App\Http\Models\HasilKompetensi;
use App\Http\Models\PertanyaanAssesment;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;
use PDF;
/**
 * HistoriesController
 */
class HistoriesController extends Controller
{
  public function index(Request $request){
    $histories = Assesment::with("get_jenis_assessment")->where("user_id", Session::get("id"))->get();
    return view("partisipan.dashboard.logtest.v_index", compact("histories"));
  }

  public function show($id, Request $request){

    // TODO: Menampilkan keterangan bobot nilai
    $rangeScore             = KeteranganNilai::orderBy("range_score")->get();

    $assessmentId     = Crypt::decrypt($id);

    // TODO: Menampilkan Nilai Jawaban dan Kompetensi Berdasarkan Assessment ID - Session
    $sql              = PertanyaanAssesment::where("assessment_id", $assessmentId)
                                      ->select("k.kompetensi as kKom","detail_pertanyaans_assessments.nilai as dpaNilai")
                                      ->join("pertanyaans as p","p.id","=","detail_pertanyaans_assessments.pertanyaan_id")
                                      ->join("kompetensis as k","k.id","=","p.kompetensi_id")
                                      ->orderBy("kKom","asc")
                                      ->get();

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
      //TODO: Memulai menghitung proses rekomendasi
      $time = microtime();
      $time = explode(' ', $time);
      $time = $time[1] + $time[0];
      $start = $time;

      $flag         = "0";
      //TODO: Menampilkan dan filter jumlah assessment_id
      $arrayUserAssessmentTraining  = array(); //Collect Assessment Id
      foreach($userAssessmentTraining as $uat){
        if($uat->id != $assessmentId){
          $arrayUserAssessmentTraining[]  = $uat->id;
        }
      }

      //TODO: Menampilkan nilai similarity terbesar
      for($i = 0; $i < count($arrayUserAssessmentTraining); $i++){
        $sqlOtherUser              = PertanyaanAssesment::where("assessment_id", $arrayUserAssessmentTraining[$i])
                                          ->select("detail_pertanyaans_assessments.assessment_id as dpaAssIdOther","detail_pertanyaans_assessments.nilai as dpaNilaiOther","k.kompetensi as kKomOther","u.firstname as uF","u.lastname as uL")
                                          ->join("pertanyaans as p","p.id","=","detail_pertanyaans_assessments.pertanyaan_id")
                                          ->join("kompetensis as k","k.id","=","p.kompetensi_id")
                                          //Tambahin query ini
                                          ->join("assessments as ass","detail_pertanyaans_assessments.assessment_id","=","ass.id")
                                          ->join("users as u","ass.user_id","=","u.id")
                                          ->orderBy("kKomOther","asc")
                                          ->get();

        //TODO: Menampilkan list nilai siswa target
        $arraySiswaTarget           = array(); //Collect nilai siswa target atau session yang aktif sekarang
        // $arrayKompetensiOtherSiswa  = array();

        //Menampilkan nilai untuk dimasukkan ke dalam variable array $arraySiswaTarget
        foreach($sql as $row){
          $arraySiswaTarget[]           = $row->dpaNilai;
          $arrayKompetensiSiswaTarget[] = $row->kKom;
        }

        // //TODO: Count sql other user
        $arrayCountDpaNilai         = array(); //Collect nilai siswa dari dataset

        // TODO: Menampilkan nilai daripada siswa lain
        foreach($sqlOtherUser as $key=>$row2){
          $arrayCountDpaNilai[]         = $row2->dpaNilaiOther;
        }
        $tmpToArray=0;
        if($countSiswaTarget == count($arrayCountDpaNilai)){
          //TODO: Panggil fungsi similarity
          $tmpToArray = $this->pearsonCorrelationCoefficient($arraySiswaTarget, $arrayCountDpaNilai, $countSiswaTarget); //TODO: Menampilkan hasil similarity

          $arrSim[] = $tmpToArray;
          array_multisort($arrSim, SORT_DESC);
          // rsort($arrSim);
        }
      }

      $arrayHasilSqlOther = array();
      $tmpToArray=0;
      //TODO: Menampilkan nilai similarity terbesar
      for($i = 0; $i < count($arrayUserAssessmentTraining); $i++){
        $sqlOtherUser              = PertanyaanAssesment::where("assessment_id", $arrayUserAssessmentTraining[$i])
                                          ->select("detail_pertanyaans_assessments.assessment_id as dpaAssIdOther","detail_pertanyaans_assessments.nilai as dpaNilaiOther","k.kompetensi as kKomOther","u.firstname as uF","u.lastname as uL")
                                          ->join("pertanyaans as p","p.id","=","detail_pertanyaans_assessments.pertanyaan_id")
                                          ->join("kompetensis as k","k.id","=","p.kompetensi_id")
                                          //Tambahin query ini
                                          ->join("assessments as ass","detail_pertanyaans_assessments.assessment_id","=","ass.id")
                                          ->join("users as u","ass.user_id","=","u.id")
                                          ->orderBy("kKomOther","asc")
                                          ->get();


        //TODO: Menampilkan list nilai siswa target
        $arraySiswaTarget     = array(); //Collect nilai siswa target atau session yang aktif sekarang

        //Menampilkan nilai untuk dimasukkan ke dalam variable array $arraySiswaTarget
        foreach($sql as $row){
          $arraySiswaTarget[] = $row->dpaNilai;
        }

        $arrNilai2      = array();

        foreach($sqlOtherUser as $key=>$values){
          $arrNilai2[]  = $values->dpaNilaiOther;

          if($countSiswaTarget == count($arrNilai2)){
            $tmpToArray = $this->pearsonCorrelationCoefficient($arraySiswaTarget, $arrNilai2, $countSiswaTarget); //TODO: Menampilkan hasil similarity
            $arrayHasilSqlOther[$arrayUserAssessmentTraining[$i]]["nilai_similarity"] = $tmpToArray;
            // array_multisort($arrayHasilSqlOther, SORT_DESC);
          }
        }
      }

      //TODO: Menampilkan data keseluruhan
      // Obtain a list of columns
      // Sorting
      foreach ($arrayHasilSqlOther as $key => $row) {
          $mid[$key]  = $row['nilai_similarity'];
      }

      // Sort the data with mid descending
      // Add $data as the last parameter, to sort by the common key
      array_multisort($mid, SORT_DESC, $arrayHasilSqlOther);
      // echo print_r($arrayHasilSqlOther);

      //TODO: Disini penempatannya
      // Bagian memilih nilai terdekat dari hasil sorting hitung similarity
      $arrDiatasNol = array();
      foreach($arrSim as $ky=>$vl){
        if($vl > 0){
          $arrDiatasNol[] = $vl;
        }
      }

      //Mengambil 30% dari hasil keseluruhan
      //Start
      $total            = (count($arrDiatasNol) * 30)/100; //TODO: total * 30/100
      $almostQueryDone  = "";
      $pembulatanTotal  = ceil($total); //TODO: Pembulatan keatas
      $tmpAssessmentId  = array();
      $no=1;

      $arrKompetensi  = array();
      $countArrKompetensi = array();
      // TODO: Menampilkan hasil kompetensi dengan nilai diambil dari pertanyaan
      foreach($arrayHasilSqlOther as $otherPerson=>$values){
        foreach($arrayHasilSqlOther[$otherPerson] as $key=>$value){
          if($no <= $pembulatanTotal){
            $almostQueryDone              = PertanyaanAssesment::where("assessment_id", $otherPerson)
                                              ->select("detail_pertanyaans_assessments.assessment_id as dpaAssIdOtherFinalResult","detail_pertanyaans_assessments.nilai as dpaNilaiOtherFinalResult","k.kompetensi as kKomOtherFinalResult","u.firstname as uFFinalResult","u.lastname as uLFinalResult")
                                              ->join("pertanyaans as p","p.id","=","detail_pertanyaans_assessments.pertanyaan_id")
                                              ->join("kompetensis as k","k.id","=","p.kompetensi_id")
                                              //Tambahin query ini
                                              ->join("assessments as ass","detail_pertanyaans_assessments.assessment_id","=","ass.id")
                                              ->join("users as u","ass.user_id","=","u.id")
                                              ->orderBy("kKomOtherFinalResult","asc")
                                              ->get();

            //TODO: Menampilkan list nilai siswa target
            $arraySiswaTarget3           = array(); //Collect nilai siswa target atau session yang aktif sekarang
            $arrayKompetensiOtherSiswa3  = array();

            //Menampilkan nilai untuk dimasukkan ke dalam variable array $arraySiswaTarget
            foreach($sql as $row){
              $arraySiswaTarget3[]          = $row->dpaNilai;
              $arrayKompetensiSiswaTarget3[]= $row->kKom;
            }

            $arrayKompetensiOtherSiswa3  = array();
            $arrayNamaOtherSiswa3        = array();
            $arrayOtherAssId3            = array();
            $arrNilai3                   = array();

            foreach($almostQueryDone as $key=>$values){
              $arrayKompetensiOtherSiswa3[] = $values->kKomOtherFinalResult;
              $arrayNamaOtherSiswa3[]       = $values->uFFinalResult." ".$values->uLFinalResult;
              $arrayOtherAssId3[]           = $values->dpaAssIdOtherFinalResult;
              $arrNilai3[]                  = $values->dpaNilaiOtherFinalResult;
            }

            foreach($arrayKompetensiOtherSiswa3 as $q=>$v){
              if($arrayKompetensiSiswaTarget3[$q] == $v && $arrNilai3[$q] > $arraySiswaTarget3[$q]){
                $arrKompetensi[$arrayKompetensiSiswaTarget3[$q]][$arrayOtherAssId3[$q]] = $arrNilai3[$q];
                array_multisort($arrKompetensi, SORT_DESC);
              }
            }

          }

          $no++;
        }
      }

      // print_r($arrKompetensi);


      //Mencari Lima Terbesar Rekomendasi
      $top5 = array_slice($arrKompetensi, 0, 5);

      //Total penghitungan waktu kecepatan rekomendasi
      $time = microtime();
      $time = explode(' ', $time);
      $time = $time[1] + $time[0];
      $finish = $time;
      $total_time = round(($finish - $start), 4);
      // echo "Selesai dalam ".$total_time." detik";
      //TODO:Menghitung kecepatan rekomendasi
      //Start


      //End
      // print_r($top5);
      // TODO: Count Values
      // $count = array_map('count', $arrKompetensi);

      // Find Highest
      // Kalau misalkan dicari yang terbesar (Valuenya) : $value = max($count);

      //find value for highest
      // Kalau misalkan dicari yang terbesar (Index) : $mostvalues = array_search($value, $count);

      // $hash = $this->array_flip_multiple($count);

      // filter $hash based on your specs (2 or more)
      // $hash = array_filter($hash, function($items) {return count($items) > 1;});

      // get all remaining keys
      // $keys = array_reduce($hash, 'array_merge', array());

      // print_r($count);
      // print_r($hash);
      // print_r($keys);

      //Disimpen dulu bagian ini
      // $arrSortValue = array();
      // foreach($hash as $key=>$v){
      //    $arrSortValue[] = $key;
      // }
      //
      // print_r($arrSortValue);

      //End

      return view("partisipan.dashboard.logtest.v_detail", compact("sql","rangeScore","top5","flag"));
    }
    //Bagian Akhir Else
  }

  public function array_flip_multiple(array $a) {
    $result = array();
    foreach($a as $k=>$v)
        $result[$v][]=$k;
    return $result;
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

  // TODO: Jika assessment yang dihasilkan baru 1
  public function tanpaRekomendasi($sql, $rangeScore, $id, $noRecommend, $flag){
    $sql        = $sql;
    $rangeScore = $rangeScore;
    $id         = $id;
    return view("partisipan.dashboard.logtest.v_detail", compact("sql","rangeScore","id","noRecommend","flag"));
  }

  public function thereIsNoData(){
    return "Tidak ada yang direkomendasikan untuk Anda";
  }

  public function printPdf($id, Request $request){
    $decryptAssId = Crypt::decrypt($id);

    $resultAssKom = AssessmentKompetensi::where("ass_id", $decryptAssId)->get();

    $rangeScore = KeteranganNilai::orderBy("range_score")->get();



    $cetakHasilAsskomsKekuatan = HasilAssKom::join("keteranganhasils as kh","hasil_nilai_asskoms.keteranganhasil_id","=","kh.id")
                                    ->join("assesment_kompetensis as ak","hasil_nilai_asskoms.asskom_id","=","ak.id")
                                    ->join("keterangan_nilais as kn","kh.keterangan_id","=","kn.id")
                                    ->where("ak.ass_id", $decryptAssId)
                                    ->whereIn("range_score",["3","4"])
                                    ->get();

    $cetakHasilAsskomsPengembangan = HasilAssKom::join("keteranganhasils as kh","hasil_nilai_asskoms.keteranganhasil_id","=","kh.id")
                                    ->join("assesment_kompetensis as ak","hasil_nilai_asskoms.asskom_id","=","ak.id")
                                    ->join("keterangan_nilais as kn","kh.keterangan_id","=","kn.id")
                                    ->where("ak.ass_id", $decryptAssId)
                                    ->whereIn("range_score",["1","2"])
                                    ->get();

    $cetakSaran = HasilAssKom::join("keteranganhasils as kh","hasil_nilai_asskoms.keteranganhasil_id","=","kh.id")
                                    ->join("assesment_kompetensis as ak","hasil_nilai_asskoms.asskom_id","=","ak.id")
                                    ->join("keterangan_nilais as kn","kh.keterangan_id","=","kn.id")
                                    ->join("kompetensis as k","kh.kompetensi_id","=","k.id")
                                    ->where("ak.ass_id", $decryptAssId)
                                    ->whereIn("range_score",["1","2"])
                                    ->orderByDesc("pembulatan")
                                    ->get();

    $dataUser = Assesment::with('get_user')->with("get_jenis_assessment")
                          ->where("id", $decryptAssId)->limit(1)->get();

    $pdf = PDF::loadView('partisipan.dashboard.report.v_print', compact("dataUser","cetakSaran","resultAssKom","rangeScore","cetakHasilAsskomsPengembangan","cetakHasilAsskomsKekuatan","id"))->setPaper('a4', 'portrait');
    // $pdf->render();

    return $pdf->stream();
  }
}
