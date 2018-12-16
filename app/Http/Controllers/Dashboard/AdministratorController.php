<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\LoginAuth;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
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

    public function add(){
      return view("administrator.dashboard.pages.admin-page.v_add_admin");
    }

    public function store(Request $request){
      // echo Uuid::generate()->string;
      $request->validate([
        'firstname' => 'required',
        'lastname'  => 'required'
      ]);

      $users = new LoginAuth([
        'id'        => Uuid::generate()->string,
        'firstname' => $request->firstname,
        'lastname'  => $request->lastname,
      ]);

      $result = $users->save();
      if($result){
        echo "Berhasil";
      }else{
        echo "Gagal";
      }
    }

    public function update(Request $request){
      $txtIdAdmin           = $request->id_admin;
      $decryptId            = trim(Crypt::decrypt($txtIdAdmin));

      $txtFirstName         = ucfirst(trim($request->first_name));
      $txtLastName          = ucfirst(trim($request->last_name));
      $txtNickName          = ucfirst(trim($request->nick_name));
      $txtAddress           = ucfirst(trim($request->address));
      $txtEmail             = strtolower(trim($request->email));
      $txtUsername          = trim($request->username);
      $txtPhone             = trim($request->phone);
      // $txtLevel             = trim($request->level);
      //Config Upload File
      request()->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      // $txtImage             = $request->file('image');
      // $txtOriginalExtension = $txtImage->getClientOriginalExtension();
      $txtImageName         = "PA-".time().'.'.request()->image->getClientOriginalExtension();
      if(!$request->hasFile('image')){
        $updateUsers  = LoginAuth::findOrFail($decryptId);
        $updateUsers            = LoginAuth::findOrFail($decryptId);
        $updateUsers->firstname = $txtFirstName;
        $updateUsers->lastname  = $txtLastName;
        $updateUsers->nickname  = $txtNickName;
        $updateUsers->address   = $txtAddress;
        $updateUsers->phone     = $txtPhone;
        $updateUsers->email     = $txtEmail;
        $updateUsers->username  = $txtUsername;
        echo "Berhasil";
      }else{
        $updateUsers            = LoginAuth::findOrFail($decryptId);
        $updateUsers->firstname = $txtFirstName;
        $updateUsers->lastname  = $txtLastName;
        $updateUsers->nickname  = $txtNickName;
        $updateUsers->address   = $txtAddress;
        $updateUsers->phone     = $txtPhone;
        $updateUsers->email     = $txtEmail;
        $updateUsers->username  = $txtUsername;
        $updateUsers->image     = $txtImageName;

        if($updateUsers->save()){
          request()->image->move(public_path('images/images-admin'), $txtImageName);
          Session::flash("success","Anda telah berhasil mengubah datanya.");
          return redirect("backend/pages/administrator/".$txtIdAdmin);
          exit();
        }
        else{
          Session::flash("error","Gagal mengubah.");
          return redirect("backend/pages/administrator/".$txtIdAdmin);
          exit();
        }
      }
    }

    public function destroy(Request $request){
      $txtId    = Crypt::decrypt($request->id);
      LoginAuth::where('id',$txtId)->delete();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }
}
