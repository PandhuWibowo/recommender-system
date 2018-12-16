<?php

namespace App\Http\Controllers\Dashboard;

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

    public function index(){
      $dataUsers = User::where('level', 'Participant')->orderBy('firstname', 'desc')->get();
      return view("administrator.dashboard.pages.user-master-page.v_index", compact('dataUsers'));
    }

    public function show($id){
      $decryptId            = Crypt::decrypt($id);
      $dataUsers            = User::where('level','Participant')->where('id',$decryptId)->first();
      // echo response()->json($detailAdministrator);
      return view("administrator.dashboard.pages.user-master-page.detail.v_view", compact('dataUsers'));
      // echo $decryptId;
    }

    public function add(){
      return view("administrator.dashboard.pages.user-master-page.v_add_user");
    }

    public function store(Request $request){
      // echo Uuid::generate()->string;
      $rules = array(
        'firstname'         => 'required',
        'lastname'          => 'required',
        'email'             => 'required|email|unique:users',
        'username'          => 'required|max:20',
        'phone'             => 'required|numeric',
        'level'             => 'required',
        'address'           => 'required|max:300',
        // 'image'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'password'          => 'required|min:6|max:30',
        'confirm_password'  => 'required|same:password'
      );

      $validator = Validator::make(Input::all(), $rules);
      request()->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      if ($validator->fails()) {
        //Rumus Session
        // Session::put('st_firstname', $request->firstname);
        $messages = $validator->messages();
        return Redirect::to('backend/pages/users/add')
          ->withErrors($validator);
      }
      else{
        if($request->hasFile('image')){
          $txtImage     = $request->file('image');
          $txtImageName = "PA-".time().'.'.$txtImage->getClientOriginalExtension();

          $users = new User([
            'id'        => Uuid::generate()->string,
            'firstname' => ucfirst(trim($request->firstname)),
            'lastname'  => ucfirst(trim($request->lastname)),
            'nickname'  => ucfirst(trim($request->nickname)),
            'email'     => trim($request->email),
            'username'  => ucfirst(trim($request->username)),
            'phone'     => trim($request->phone),
            'level'     => trim($request->level),
            'address'   => ucfirst(trim($request->address)),
            'password'  => Hash::make($request->password),
            'image'     => $txtImageName,
            'active'    => '0'
          ]);

          $result = $users->save();
          if($result){
            request()->image->move(public_path('images/images-users'), $txtImageName);
            Session::flash("success","Anda berhasil menyimpan data user yang baru");
            return redirect("backend/pages/users");
          }else{
            Session::flash("error","Anda gagal menyimpan data user yang baru");
            return redirect("backend/pages/users/add");
          }
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
