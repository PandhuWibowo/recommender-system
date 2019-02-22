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

   public function index(){
     $keteranganNilai = KeteranganNilai::all();
     $kompetensi      = Kompetensi::orderBy("kompetensi")->get();
     $hasilkompetensi = HasilKompetensi::orderBy("id")->get();
     return view("administrator.dashboard.pages.hasil-kompetensi.competency-result", compact("keteranganNilai","kompetensi","hasilkompetensi"));
   }

   public function store(Request $request){
     $keteranganId    = $request->keterangan_id;
     $kompetensiId    = $request->kompetensi_id;
     $hasilkompetensi = $request->hasil_kompetensi;

     $rules = array(
       'keterangan_id'    => 'required',
       'kompetensi_id'    => 'required',
       'hasil_kompetensi' => 'required'
     );

     $validator = Validator::make(Input::all(), $rules);

     if ($validator->fails()) {
       $messages = $validator->messages();
       return response()->json(
         array(
           "error" => $validator
         )
       );
         exit();
     }
     else{
       $descResults         = new HasilKompetensi([
         'id'               => Uuid::generate()->string,
         'keterangan_id'    => $keteranganId,
         'kompetensi_id'    => $kompetensiId,
         'hasil_kompetensi' => $hasilkompetensi
       ]);
       $descResults->save();

       return response()->json(
         array(
           "response" => "success"
         )
       );
     }
   }

   public function update(Request $request){
     $varId             = Crypt::decrypt($request->id);
     $varKeteranganId   = $request->keterangan_id;
     $varKompetensiId   = $request->kompetensi_id;
     $varHasilKompetensi= $request->hasil_kompetensi;

     $descriptionScore                  = HasilKompetensi::findOrFail($varId);
     $descriptionScore->keterangan_id   = $varKeteranganId;
     $descriptionScore->kompetensi_id   = $varKompetensiId;
     $descriptionScore->hasil_kompetensi= $varHasilKompetensi;

     $descriptionScore->save();

     return response()->json(
       array(
         "response" => "success"
       )
     );
   }

   public function destroy(Request $request){
     $varId = Crypt::decrypt($request->id);
     HasilKompetensi::where('id',$varId)->delete();
     return response()->json(
       array(
         'response'  => "success"
       )
     );
   }
 }
