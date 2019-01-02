<?php

namespace App\Http\Controllers\Dashboard\User\DashboardUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
/**
 * AdministratorController
 */
class UserController extends Controller
{
    public function show($id){
      $decryptId            = Crypt::decrypt($id);
      $dataUsers            = User::where('level','Participant')->where('id',$decryptId)->first();
      // echo dd($dataUsers);
      // echo response()->json($detailAdministrator);
      return view("partisipan.dashboard.profile.v_view", compact('dataUsers'));
      // echo $decryptId;
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
      $txtImageName             = "PA-".time().'.'.request()->image->getClientOriginalExtension();
      if(!$request->hasFile('image')){
        $updateUsers            = User::findOrFail($decryptId);

        $updateUsers->firstname = $txtFirstName;
        $updateUsers->lastname  = $txtLastName;
        $updateUsers->nickname  = $txtNickName;
        $updateUsers->address   = $txtAddress;
        $updateUsers->phone     = $txtPhone;
        $updateUsers->email     = $txtEmail;
        $updateUsers->username  = $txtUsername;
        if($updateUsers->save()){
          // request()->image->move(public_path('images/images-admin'), $txtImageName);
          Session::flash("success","Anda telah berhasil mengubah datanya.");
          return redirect("backend/pages/users/".$txtIdAdmin);
          exit();
        }
        else{
          Session::flash("error","Gagal mengubah.");
          return redirect("backend/pages/users/".$txtIdAdmin);
          exit();
        }
      }else{
        $updateUsers            = User::findOrFail($decryptId);
        $updateUsers->firstname = $txtFirstName;
        $updateUsers->lastname  = $txtLastName;
        $updateUsers->nickname  = $txtNickName;
        $updateUsers->address   = $txtAddress;
        $updateUsers->phone     = $txtPhone;
        $updateUsers->email     = $txtEmail;
        $updateUsers->username  = $txtUsername;
        $updateUsers->image     = $txtImageName;

        if($updateUsers->save()){
          request()->image->move(public_path('images/images-users'), $txtImageName);
          Session::flash("success","Anda telah berhasil mengubah datanya.");
          return redirect("backend/pages/users/".$txtIdAdmin);
          exit();
        }
        else{
          Session::flash("error","Gagal mengubah.");
          return redirect("backend/pages/users/".$txtIdAdmin);
          exit();
        }
      }
    }

    public function destroy(Request $request){
      $txtId    = Crypt::decrypt($request->id);
      User::where('id',$txtId)->delete();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }
}
