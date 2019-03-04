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
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\Participant;
use Mail;
use BrowserDetect;

/**
 * AdministratorController
 */
class UserController extends Controller
{

    public function index(Request $request){
      $logPages = new DirectPage([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Menu User",
        "data"        => Session::get("email")." mengunjungi halaman User",
        "link"        => url()->current()
      ]);

      $logPages->save();

      $dataUsers = User::where('level', 'Participant')->orderBy('firstname', 'desc')->get();
      return view("administrator.dashboard.pages.user-master-page.v_index", compact('dataUsers'));
    }

    public function show($id, Request $request){
      $decryptId            = Crypt::decrypt($id);

      $logPages = new DirectPage([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Detail User",
        "data"        => Session::get("email")." mengunjungi halaman Detail User dengan No. Id : ".$id,
        "link"        => url()->current()
      ]);

      $logPages->save();

      $dataUsers            = User::where('level','Participant')->where('id',$decryptId)->first();
      // echo response()->json($detailAdministrator);
      return view("administrator.dashboard.pages.user-master-page.detail.v_view", compact('dataUsers'));
      // echo $decryptId;
    }

    public function add(Request $request){
      $logPages = new DirectPage([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Add New User",
        "data"        => Session::get("email")." mengunjungi halaman Add New User",
        "link"        => url()->current()
      ]);

      $logPages->save();

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
          $confirmation_code = str_random(30);
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
            'active'    => '0',
            'confirmation_code' => $confirmation_code
          ]);

          if($users->save()){


            Mail::send('administrator.dashboard.pages.email_page.verify', ['confirmation_code' => $confirmation_code], function($m) {
                $m->from('no-reply@loopinc.id', 'Loopinc.id');
                $m->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))
                    ->subject('Confirm your account at this email');
            });

            $log = new Participant([
              "user_id"     => Session::get("id"),
              "ip_address"  => $request->ip(),
              "browser"     => BrowserDetect::browserName(),
              "action"      => "Add New Participant - Store|Success",
              "data"        => "Berhasil menyimpan data Partisipan baru - Partisipan ID : ".$users->id.", Firstname : ".ucfirst(trim($request->firstname)).", Lastname : ".ucfirst(trim($request->lastname)).", Nickname : ".ucfirst(trim($request->nickname)).", Email : ".trim($request->email).", Username : ".ucfirst(trim($request->username)).", Phone Number : ".trim($request->phone).
                               ", Level : ".trim($request->level).", Address : ".ucfirst(trim($request->address)).", Password : ".Hash::make($request->password).", Image : ".$txtImageName,
              "link"        => url()->current()
            ]);

            $log->save();

            request()->image->move(public_path('images/images-users'), $txtImageName);
            Session::flash("success","Anda berhasil menyimpan data user yang baru");
            return redirect("backend/pages/users");
          }else{
            $log = new Participant([
              "user_id"     => Session::get("id"),
              "ip_address"  => $request->ip(),
              "browser"     => BrowserDetect::browserName(),
              "action"      => "Add New Participant - Store|Failed",
              "data"        => "Gagal menyimpan data Partisipan baru - Partisipan ID : ".$users->id.", Firstname : ".ucfirst(trim($request->firstname)).", Lastname : ".ucfirst(trim($request->lastname)).", Nickname : ".ucfirst(trim($request->nickname)).", Email : ".trim($request->email).", Username : ".ucfirst(trim($request->username)).", Phone Number : ".trim($request->phone).
                               ", Level : ".trim($request->level).", Address : ".ucfirst(trim($request->address)).", Password : ".Hash::make($request->password).", Image : ".$txtImageName,
              "link"        => url()->current()
            ]);

            $log->save();

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
          $log = new Participant([
            "user_id"     => Session::get("id"),
            "ip_address"  => $request->ip(),
            "browser"     => BrowserDetect::browserName(),
            "action"      => "Update Partisipan - Update|Success",
            "data"        => "Berhasil mengubah data Partisipan - Partisipan ID : ".$decryptId.", Firstname : ".ucfirst(trim($txtFirstName)).", Lastname : ".ucfirst(trim($txtLastName)).", Nickname : ".ucfirst(trim($txtNickName)).", Email : ".trim($txtEmail).", Username : ".ucfirst(trim($txtUsername)).", Phone Number : ".trim($txtPhone).
                             ucfirst(trim($txtAddress)),
            "link"        => url()->current()
          ]);

          $log->save();

          Session::flash("success","Anda telah berhasil mengubah datanya.");
          return redirect("backend/pages/users/".$txtIdAdmin);
          exit();
        }
        else{
          $log = new Participant([
            "user_id"     => Session::get("id"),
            "ip_address"  => $request->ip(),
            "browser"     => BrowserDetect::browserName(),
            "action"      => "Update Partisipan - Update|Failed",
            "data"        => "Berhasil mengubah data Partisipan - Partisipan ID : ".$decryptId.", Firstname : ".ucfirst(trim($txtFirstName)).", Lastname : ".ucfirst(trim($txtLastName)).", Nickname : ".ucfirst(trim($txtNickName)).", Email : ".trim($txtEmail).", Username : ".ucfirst(trim($txtUsername)).", Phone Number : ".trim($txtPhone).
                             ucfirst(trim($txtAddress)),
            "link"        => url()->current()
          ]);

          $log->save();

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
          $log = new Participant([
            "user_id"     => Session::get("id"),
            "ip_address"  => $request->ip(),
            "browser"     => BrowserDetect::browserName(),
            "action"      => "Update Partisipan - Update|Success",
            "data"        => "Berhasil mengubah data Partisipan - Partisipan ID : ".$decryptId.", Firstname : ".ucfirst(trim($txtFirstName)).", Lastname : ".ucfirst(trim($txtLastName)).", Nickname : ".ucfirst(trim($txtNickName)).", Email : ".trim($txtEmail).", Username : ".ucfirst(trim($txtUsername)).", Phone Number : ".trim($txtPhone).
                             ucfirst(trim($txtAddress)).", Image : ".$txtImageName,
            "link"        => url()->current()
          ]);

          $log->save();

          Session::flash("success","Anda telah berhasil mengubah datanya.");
          return redirect("backend/pages/users/".$txtIdAdmin);
          exit();
        }
        else{
          $log = new Participant([
            "user_id"     => Session::get("id"),
            "ip_address"  => $request->ip(),
            "browser"     => BrowserDetect::browserName(),
            "action"      => "Update Partisipan - Update|Failed",
            "data"        => "Gagal mengubah data Partisipan - Partisipan ID : ".$decryptId.", Firstname : ".ucfirst(trim($txtFirstName)).", Lastname : ".ucfirst(trim($txtLastName)).", Nickname : ".ucfirst(trim($txtNickName)).", Email : ".trim($txtEmail).", Username : ".ucfirst(trim($txtUsername)).", Phone Number : ".trim($txtPhone).
                             ucfirst(trim($txtAddress)).", Image : ".$txtImageName,
            "link"        => url()->current()
          ]);

          $log->save();

          Session::flash("error","Gagal mengubah.");
          return redirect("backend/pages/users/".$txtIdAdmin);
          exit();
        }
      }
    }

    public function destroy(Request $request){
      $txtId    = Crypt::decrypt($request->id);

      $data = User::where('id', $txtId)->first();

      if(User::where('id',$txtId)->delete()){

        $log = new Participant([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Delete User - Delete|Success",
          "data"        => "Berhasil menghapus data User - User ID : ".$data->id.", Firstname : ".ucfirst(trim($data->firstname)).", Lastname : ".ucfirst(trim($data->lastname)).", Nickname : ".ucfirst(trim($data->nickname)).", Email : ".trim($data->email).", Username : ".ucfirst(trim($data->username)).", Phone Number : ".trim($data->phone).
                           ", Level : ".trim($data->level).", Address : ".ucfirst(trim($data->address)).", Password : ".Hash::make($data->password).", Image : ".$data->image,
          "link"        => url()->current()
        ]);

        $log->save();

        return response()->json(
          array(
            'response'  => "success"
          )
        );
      }else{
        $log = new Participant([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Delete User - Delete|Failed",
          "data"        => "Gagal menghapus data User - User ID : ".$data->id.", Firstname : ".ucfirst(trim($data->firstname)).", Lastname : ".ucfirst(trim($data->lastname)).", Nickname : ".ucfirst(trim($data->nickname)).", Email : ".trim($data->email).", Username : ".ucfirst(trim($data->username)).", Phone Number : ".trim($data->phone).
                           ", Level : ".trim($data->level).", Address : ".ucfirst(trim($data->address)).", Password : ".Hash::make($data->password).", Image : ".$data->image,
          "link"        => url()->current()
        ]);

        $log->save();

        return response()->json(
          array(
            'response'  => "failed"
          )
        );
      }

    }
}
