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

    public function index(Request $request){
      $dataAdministrator = LoginAuth::where('level', 'Super Admin')->where('active','1')->orderBy('firstname', 'desc')->get();
      return view("administrator.dashboard.pages.admin-page.v_index", compact('dataAdministrator'));
    }

    public function show($id, Request $request){
      $decryptId            = Crypt::decrypt($id);
      $detailAdministrator  = LoginAuth::where('level','Super Admin')->where('id',$decryptId)->first();
      return view("administrator.dashboard.pages.admin-page.detail.v_view", compact('detailAdministrator'));
    }

    public function add(Request $request){
      return view("administrator.dashboard.pages.admin-page.v_add_admin");
    }

    public function store(Request $request){
      $rules = array(
        'firstname'         => 'required',
        'lastname'          => 'required',
        'email'             => 'required|email|unique:users',
        'phone'             => 'required|numeric',
        'level'             => 'required',
        'address'           => 'required|max:300',
        'image'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'password'          => 'required|min:6|max:30',
        'confirm_password'  => 'required|same:password'
      );

      $validator = Validator::make(Input::all(), $rules);
      // request()->validate([
      //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      // ]);

      if ($validator->fails()) {
        $messages = $validator->messages();
        Session::put("firstname_new", ucfirst(trim($request->firstname)));
        Session::put("lastname_new", ucfirst(trim($request->lastname)));
        Session::put("email_new", trim($request->email));
        Session::put("phone_new", trim($request->phone));
        Session::put("address_new", ucfirst(trim($request->address)));
        return Redirect::to('backend/pages/administrator/add')
          ->withErrors($validator);
      }
      else{
        if($request->hasFile('image')){
          $txtImage     = $request->file('image');
          $txtImageName = "PA-".time().'.'.$txtImage->getClientOriginalExtension();

          $users = new LoginAuth([
            'id'        => Uuid::generate()->string,
            'firstname' => ucfirst(trim($request->firstname)),
            'lastname'  => ucfirst(trim($request->lastname)),
            'email'     => trim($request->email),
            'phone'     => trim($request->phone),
            'level'     => trim($request->level),
            'address'   => ucfirst(trim($request->address)),
            'password'  => Hash::make($request->password),
            'image'     => $txtImageName,
            'active'    => '1'
          ]);

          if($users->save()){
            request()->image->move(public_path('images/images-admin'), $txtImageName);
            Session::flash("success","Anda berhasil menyimpan data administrator yang baru");
            return redirect("backend/pages/administrator/add");
          }else{
            Session::flash("error","Anda gagal menyimpan data administrator yang baru");
            return redirect("backend/pages/administrator/add");
          }
        }
      }
    }

    public function update(Request $request){
      $txtIdAdmin           = $request->id_admin;
      $decryptId            = trim(Crypt::decrypt($txtIdAdmin));
      $txtFirstName         = ucfirst(trim($request->first_name));
      $txtLastName          = ucfirst(trim($request->last_name));
      $txtAddress           = ucfirst(trim($request->address));
      $txtEmail             = strtolower(trim($request->email));
      $txtPhone             = trim($request->phone);
      if(!$request->hasFile('image')){
        $updateUsers            = LoginAuth::findOrFail($decryptId);

        $updateUsers->firstname = $txtFirstName;
        $updateUsers->lastname  = $txtLastName;
        $updateUsers->address   = $txtAddress;
        $updateUsers->phone     = $txtPhone;
        $updateUsers->email     = $txtEmail;
        if($updateUsers->save()){
          Session::flash("success","Anda telah berhasil mengubah datanya.");
          return redirect("backend/pages/administrator/".$txtIdAdmin);
          exit();
        }
        else{
          Session::flash("error","Gagal mengubah.");
          return redirect("backend/pages/administrator/".$txtIdAdmin);
          exit();
        }
      }else{
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $txtImageName             = "PA-".time().'.'.request()->image->getClientOriginalExtension();

        $updateUsers            = LoginAuth::findOrFail($decryptId);
        $updateUsers->firstname = $txtFirstName;
        $updateUsers->lastname  = $txtLastName;
        $updateUsers->address   = $txtAddress;
        $updateUsers->phone     = $txtPhone;
        $updateUsers->email     = $txtEmail;
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

      $data = LoginAuth::where('id', $txtId)->where('active', '1')->first();
      if(LoginAuth::where('id',$txtId)->delete()){
        return response()->json(
          array(
            'response'  => "success"
          )
        );
      }else{
        return response()->json(
          array(
            'response'  => "failed"
          )
        );
      }
    }
}
