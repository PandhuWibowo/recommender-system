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
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\DescResult;
use BrowserDetect;
/**
 * KompetensiController
 */

 class CompetenciesResultController extends Controller{

   public function index(Request $request){
     $logPages = new DirectPage([
       "user_id"     => Session::get("id"),
       "ip_address"  => $request->ip(),
       "browser"     => BrowserDetect::browserName(),
       "action"      => "Menu Description Result",
       "data"        => Session::get("email")." mengunjungi halaman Description Result",
       "link"        => url()->current()
     ]);

     $logPages->save();

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

       if($descResults->save()){
         $log = new DescResult([
           "user_id"     => Session::get("id"),
           "ip_address"  => $request->ip(),
           "browser"     => BrowserDetect::browserName(),
           "action"      => "Store Description Result - Store|Success",
           "data"        => "Berhasil menyimpan data baru Description Result - Description Result ID : ".$descResults->id.", Keterangan ID : ".$keteranganId.", Kompetensi ID : ".$kompetensiId.", Hasil Kompetensi : ".$hasilkompetensi,
           "link"        => url()->current()
         ]);

         $log->save();

         return response()->json(
           array(
             "response" => "success"
           )
         );
       }else{
         $log = new DescResult([
           "user_id"     => Session::get("id"),
           "ip_address"  => $request->ip(),
           "browser"     => BrowserDetect::browserName(),
           "action"      => "Store Description Result - Store|Failed",
           "data"        => "Gagal menyimpan data baru Description Result - Description Result ID : ".$descResults->id.", Keterangan ID : ".$keteranganId.", Kompetensi ID : ".$kompetensiId.", Hasil Kompetensi : ".$hasilkompetensi,
           "link"        => url()->current()
         ]);

         $log->save();

         return response()->json(
           array(
             "response" => "failed"
           )
         );
       }
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

     if($descriptionScore->save()){
       $log = new DescResult([
         "user_id"     => Session::get("id"),
         "ip_address"  => $request->ip(),
         "browser"     => BrowserDetect::browserName(),
         "action"      => "Update Description Result - Update|Success",
         "data"        => "Berhasil mengubah data Description Result - Description Result ID : ".$request->id.", Keterangan ID : ".$varKeteranganId.", Kompetensi ID : ".$varKompetensiId.", Hasil Kompetensi : ".$varHasilKompetensi,
         "link"        => url()->current()
       ]);

       $log->save();
       return response()->json(
         array(
           "response" => "success"
         )
       );
     }else{
       $log = new DescResult([
         "user_id"     => Session::get("id"),
         "ip_address"  => $request->ip(),
         "browser"     => BrowserDetect::browserName(),
         "action"      => "Update Description Result - Update|Failed",
         "data"        => "Gagal mengubah data Description Result - Description Result ID : ".$request->id.", Keterangan ID : ".$varKeteranganId.", Kompetensi ID : ".$varKompetensiId.", Hasil Kompetensi : ".$varHasilKompetensi,
         "link"        => url()->current()
       ]);

       $log->save();

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
       $log = new DescResult([
         "user_id"     => Session::get("id"),
         "ip_address"  => $request->ip(),
         "browser"     => BrowserDetect::browserName(),
         "action"      => "Delete Description Result - Delete|Success",
         "data"        => "Berhasil menghapus data Description Result - Description Result ID : ".$data->id.", Keterangan ID : ".$data->keterangan_id.", Kompetensi ID : ".$data->kompetensi_id.", Hasil Kompetensi : ".$data->hasil_kompetensi,
         "link"        => url()->current()
       ]);

       $log->save();
       return response()->json(
         array(
           'response'  => "success"
         )
       );
     }else{
       $log = new DescResult([
         "user_id"     => Session::get("id"),
         "ip_address"  => $request->ip(),
         "browser"     => BrowserDetect::browserName(),
         "action"      => "Delete Description Result - Delete|Failed",
         "data"        => "Gagal menghapus data Description Result - Description Result ID : ".$data->id.", Keterangan ID : ".$data->keterangan_id.", Kompetensi ID : ".$data->kompetensi_id.", Hasil Kompetensi : ".$data->hasil_kompetensi,
         "link"        => url()->current()
       ]);

       $log->save();

       return response()->json(
         array(
           'response'  => "success"
         )
       );
     }
   }
 }
