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
     $kompetensi      = Kompetensi::all();
     return view("administrator.dashboard.pages.hasil-kompetensi.competency-result", compact("keteranganNilai","kompetensi"));
   }
 }
