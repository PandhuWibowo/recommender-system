<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\Kompetensi;
use App\Http\Models\HasilKompetensi;
use App\Http\Models\KeteranganNilai;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
/**
 * KompetensiController
 */

 class CompetenciesResultController extends Controller{

   public function index(Request $request){
     $keteranganNilai = KeteranganNilai::all();
     $kompetensi      = Kompetensi::orderBy("kompetensi")->get();
     $hasilkompetensi = HasilKompetensi::all();
     return view("administrator.dashboard.pages.hasil-kompetensi.competency-result", compact("keteranganNilai","kompetensi","hasilkompetensi"));
   }

   public function store(Request $request){
     $keteranganId    = trim($request->keterangan_nilai_id);
     $kompetensiId    = trim($request->kompetensi_id);
     $hasilkompetensi = ucfirst(trim($request->hasil_kompetensi));

     $rules = array(
       'keterangan_nilai_id'  => 'required',
       'kompetensi_id'        => 'required',
       'hasil_kompetensi'     => 'required'
     );

     $validator = Validator::make(Input::all(), $rules);

     if ($validator->fails()) {
       $message = $validator->getMessageBag()->toArray();
       if(!empty($message["keterangan_nilai_id"])){
         return response()->json(
           array(
             "response"  => "errors",
             "errors"      => $message["keterangan_nilai_id"]
           )
         );
       }else if(!empty($message["kompetensi_id"])){
         return response()->json(
           array(
             "response"  => "errors",
             "errors"    => $message["kompetensi_id"]
           )
         );
       }
       else if(!empty($message["hasil_kompetensi"])){
         return response()->json(
           array(
             "response"   => "errors",
             "errors"     => $message["hasil_kompetensi"]
           )
         );
       }
     }
     else{
       $descResults             = new HasilKompetensi([
         'id'                   => Uuid::generate()->string,
         'keterangan_nilai_id'  => $keteranganId,
         'kompetensi_id'        => $kompetensiId,
         'hasil_kompetensi'     => $hasilkompetensi
       ]);

       if($descResults->save()){
         return response()->json(
           array(
             "response" => "success"
           )
         );
       }else{
         return response()->json(
           array(
             "response" => "failed"
           )
         );
       }
     }
   }

   public function update(Request $request){
     $varKeteranganIdOld= trim($request->keterangan_nilai_id_old);
     $varKompetensiIdOld= trim($request->kompetensi_id_old);
     $varKeteranganId   = trim($request->keterangan_nilai_id);
     $varKompetensiId   = trim($request->kompetensi_id);
     $varHasilKompetensi= ucfirst(trim($request->hasil_kompetensi));

     if(HasilKompetensi::where("keterangan_nilai_id", $varKeteranganIdOld)->where("kompetensi_id", $varKompetensiIdOld)->update(['keterangan_nilai_id'=>$varKeteranganId, 'kompetensi_id'=>$varKompetensiId, 'hasil_kompetensi'=>$varHasilKompetensi])){
       return response()->json(
         array(
           "response" => "success"
         )
       );
     }else{
       return response()->json(
         array(
           "response" => "failed"
         )
       );
     }
   }

   public function destroy(Request $request){
     $varId = Crypt::decrypt($request->id);
     $data = HasilKompetensi::where('id', $varId)->first();

     if(HasilKompetensi::where('id',$varId)->delete()){
       return response()->json(
         array(
           'response'  => "success"
         )
       );
     }else{
       return response()->json(
         array(
           'response'  => "success"
         )
       );
     }
   }
 }
