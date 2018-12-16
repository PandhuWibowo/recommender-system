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
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
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
      $rules = array(
        'firstname'         => 'required',
        'lastname'          => 'required',
        'email'             => 'required|email|unique:users',
        'username'          => 'required',
        'phone'             => 'required|numeric',
        'level'             => 'required',
        'address'           => 'required|max:300',
        'password'          => 'required|min:6|max:30',
        'confirm_password'  => 'required|same:password'
      );

      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()) {
        //Rumus Session
        // Session::put('st_firstname', $request->firstname);
        $messages = $validator->messages();
        return Redirect::to('backend/pages/administrator/add')
          ->withErrors($validator);
      }
      else{
        $users = new LoginAuth([
          'id'        => Uuid::generate()->string,
          'firstname' => ucfirst(trim($request->firstname)),
          'lastname'  => ucfirst(trim($request->lastname)),
          'email'     => trim($request->email),
          'username'  => ucfirst(trim($request->username)),
          'phone'     => trim($request->phone),
          'level'     => trim($request->level),
          'address'   => ucfirst(trim($request->address)),
          'password'  => Hash::make($request->password),
          'active'    => '1'
        ]);

        $result = $users->save();
        if($result){
          Session::flash("success","Anda berhasil menyimpan data administrator yang baru");
          return redirect("backend/pages/administrator");
        }else{
          Session::flash("error","Anda gagal menyimpan data administrator yang baru");
          return redirect("backend/pages/administrator");
        }
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
