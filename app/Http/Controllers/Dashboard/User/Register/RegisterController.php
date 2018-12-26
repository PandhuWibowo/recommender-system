<?php

namespace App\Http\Controllers\Dashboard\User\Register;
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
use Illuminate\Support\Facades\Hash;/**
 * Register Controller
 */

class RegisterController extends Controller
{
  public function index(){
    return view("partisipan.register.v_register");
  }

  public function store(Request $request){
    $rules = array(
      'firstname'         => 'required',
      'lastname'          => 'required',
      'email'             => 'required|email|unique:users',
      'username'          => 'required|max:20',
      'phone'             => 'required|numeric',
      // 'address'           => 'required|max:300',
      // 'image'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'password'          => 'required|min:6|max:30',
      'confirm_password'  => 'required|same:password'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      //Rumus Session
      // Session::put('st_firstname', $request->firstname);
      $messages = $validator->messages();
      // return Redirect::to('backend/pages/users/add')
      //   ->withErrors($validator);
    }
    else{
      // // if($request->hasFile('image')){
      //   $txtImage     = $request->file('image');
      //   $txtImageName = "PA-".time().'.'.$txtImage->getClientOriginalExtension();

        $users = new User([
          'id'        => Uuid::generate()->string,
          'firstname' => ucfirst(trim($request->firstname)),
          'lastname'  => ucfirst(trim($request->lastname)),
          // 'nickname'  => ucfirst(trim($request->nickname)),
          'email'     => trim($request->email),
          'username'  => ucfirst(trim($request->username)),
          'phone'     => trim($request->phone),
          'password'  => Hash::make($request->password),
        ]);

        // $result = $users->save();
        // if($result){
        //   request()->image->move(public_path('images/images-users'), $txtImageName);
        //   Session::flash("success","Anda berhasil menyimpan data user yang baru");
        //   return redirect("backend/pages/users");
        // }else{
        //   Session::flash("error","Anda gagal menyimpan data user yang baru");
        //   return redirect("backend/pages/users/add");
        // }
      // }
    }
  }
}
