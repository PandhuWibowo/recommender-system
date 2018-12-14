<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\LoginAuth;
use Illuminate\Support\Facades\Crypt;

/**
 * AdministratorController
 */
class AdministratorController extends Controller
{

    public function index(){
      $dataAdministrator = LoginAuth::where('level', 'Super Admin')->where('active','1')->orderBy('firstname', 'desc')->get();
      return view("administrator.dashboard.pages.admin-page.v_index", compact('dataAdministrator'));
    }

    public function show($id){
      $decryptId            = Crypt::decrypt($id);
      $detailAdministrator  = LoginAuth::where('level','Super Admin')->where('id',$decryptId)->first();
      // echo response()->json($detailAdministrator);
      return view("administrator.dashboard.pages.admin-page.detail.v_view", compact('detailAdministrator'));
      // echo $decryptId;
    }
}
