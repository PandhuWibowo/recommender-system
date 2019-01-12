<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
// use App\Http\Models\User;
// use App\Http\Models\JenisAssesment;
use App\Http\Models\AssessmentKompetensi;
use App\Http\Models\RowScore;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;
/**
 *
 */
class ResultController extends Controller
{
  public function show($assId){
    $assId  = Crypt::decrypt($assId);
    $query  = DB::table("pertanyaan_assesments as pa")
                ->select("k.id as kId","r.id as rId","r.nama_rowscore as namaRowScore","k.kompetensi as kKompetensi",DB::raw("SUM(pa.nilai) as sum_nilai"))
                ->join("pertanyaans as p","pa.pertanyaan_id","=","p.id")
                ->join("jawabans as j","pa.jawaban_id","=","j.id")
                ->join("rowscores as r","p.rowscore_id","=","r.id")
                ->join("kompetensis as k","p.kompetensi_id","=","k.id")
                ->where("pa.ass_id", $assId)
                ->where("r.nama_rowscore","Self Assessment")
                ->groupBy("r.no_urut_rowscore","k.no_urut_kompetensi")
                ->get();
  $query2   = DB::table("pertanyaan_assesments as pa")
              ->select("k.id as kId","r.id as rId","r.nama_rowscore as namaRowScore","k.kompetensi as kKompetensi",DB::raw("SUM(pa.nilai) as sum_nilai"))
              ->join("pertanyaans as p","pa.pertanyaan_id","=","p.id")
              ->join("jawabans as j","pa.jawaban_id","=","j.id")
              ->join("rowscores as r","p.rowscore_id","=","r.id")
              ->join("kompetensis as k","p.kompetensi_id","=","k.id")
              ->where("pa.ass_id", $assId)
              ->where("r.nama_rowscore","SJQ")
              ->groupBy("r.no_urut_rowscore","k.no_urut_kompetensi")
              ->get();


  $cekHistory = AssessmentKompetensi::where("ass_id", $assId)->get();

  if(count($cekHistory) > 0){

  }
  else{
    foreach($query2 as $row){
      $nilai_assess;
      $nilai_sjq = $row->sum_nilai * 0.4;
      // <!-- sum_nilai sjq = {{$row->sum_nilai}} <br /> -> ini juga -->

      // <!-- ngeloop assessment -->
      foreach($query as $row2){
        if($row->kKompetensi == $row2->kKompetensi){
          $nilai_assess = ($row2->sum_nilai / 4)*0.6;
          // <!-- sum_nilai assessment = {{$row2->sum_nilai}}<br /> -> ini kan cuma setelah diitung masing2 -->
        }
      }

      // <!-- ngitung total -->
      // <!-- assessment = {{$nilai_assess}}, sjq = {{$nilai_sjq}}<br /> -> trus ini hasil tambah -->
      $nilai_total = $nilai_assess + $nilai_sjq;
      $hasil[$row->kKompetensi] = $nilai_total;
      // <!-- {{$hasil[$row->kKompetensi]}} -->
      if($hasil[$row->kKompetensi] >= 3.75 && $hasil[$row->kKompetensi] <= 4.75){
        $kompetensi4 = new AssessmentKompetensi;
        $kompetensi4->id            = Uuid::generate()->string;
        $kompetensi4->ass_id        = $assId;
        $kompetensi4->kompetensi_id = $row->kId;
        $kompetensi4->weight        = $hasil[$row->kKompetensi];
        $kompetensi4->pembulatan    = 4;
        $kompetensi4->save();
        // echo $row->kId."-".$row->kKompetensi."- 4 <br/>";
      }else if($hasil[$row->kKompetensi] >= 2.75 && $hasil[$row->kKompetensi] < 3.75){
        $kompetensi3 = new AssessmentKompetensi;
        $kompetensi3->id            = Uuid::generate()->string;
        $kompetensi3->ass_id        = $assId;
        $kompetensi3->kompetensi_id = $row->kId;
        $kompetensi3->weight        = $hasil[$row->kKompetensi];
        $kompetensi3->pembulatan    = 3;
        $kompetensi3->save();
        // echo $row->kId."-".$row->kKompetensi."- 3 <br/>";
      }else if($hasil[$row->kKompetensi] >= 1.75 && $hasil[$row->kKompetensi] < 2.75){
        $kompetensi2 = new AssessmentKompetensi;
        $kompetensi2->id            = Uuid::generate()->string;
        $kompetensi2->ass_id        = $assId;
        $kompetensi2->kompetensi_id = $row->kId;
        $kompetensi2->weight        = $hasil[$row->kKompetensi];
        $kompetensi2->pembulatan    = 2;
        $kompetensi2->save();
        // echo $row->kId."-".$row->kKompetensi."- 2 <br/>";
      }else if($hasil[$row->kKompetensi] >= 0.75 && $hasil[$row->kKompetensi] < 1.75){
        $kompetensi1 = new AssessmentKompetensi;
        $kompetensi1->id            = Uuid::generate()->string;
        $kompetensi1->ass_id        = $assId;
        $kompetensi1->kompetensi_id = $row->kId;
        $kompetensi1->weight        = $hasil[$row->kKompetensi];
        $kompetensi1->pembulatan    = 1;
        $kompetensi1->save();
        // echo $row->kId."-".$row->kKompetensi."- 1 <br/>";
      }else{
        $kompetensi0 = new AssessmentKompetensi;
        $kompetensi0->id            = Uuid::generate()->string;
        $kompetensi0->ass_id        = $assId;
        $kompetensi0->kompetensi_id = $row->kId;
        $kompetensi0->weight        = $hasil[$row->kKompetensi];
        $kompetensi0->pembulatan    = 0;
        $kompetensi0->save();
        // echo $row->kId."-".$row->kKompetensi."- 0 <br/>";
      }
      // $kompetensiFinal->save();
    }
  }


    // echo dd($query3);
    // $rowscores = RowScore::all();
    return view("partisipan.dashboard.result.v_index", compact("query","rowscores","query2"));
  }
}
