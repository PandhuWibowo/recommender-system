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
use Illuminate\Support\Facades\Hash;
use BrowserDetect;
use App\Http\Models\ModelLogs\Register;
use Mail;
/**
 * Register Controller
 */

class RegisterController extends Controller
{
  public function index(){
    return view("partisipan.register.v_register");
  }

  public function store(Request $request){
    $rules = array(
      'firstname'         => 'required|max:255',
      'lastname'          => 'required|max:255',
      'email'             => 'required|email|unique:users|max:255',
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
      return Redirect::to('user/pages/register')
        ->withErrors($validator);
    }
    else{
      // // if($request->hasFile('image')){
      //   $txtImage     = $request->file('image');
      //   $txtImageName = "PA-".time().'.'.$txtImage->getClientOriginalExtension();
        $confirmation_code = str_random(30);
        $users = User::create([
          'id'                => Uuid::generate()->string,
          'firstname'         => ucfirst(trim($request->firstname)),
          'lastname'          => ucfirst(trim($request->lastname)),
          // 'nickname'  => ucfirst(trim($request->nickname)),
          'email'             => trim($request->email),
          'username'          => ucfirst(trim($request->username)),
          'phone'             => trim($request->phone),
          'password'          => Hash::make($request->password),
          'confirmation_code' => $confirmation_code
        ]);

        $logRegister = new Register([
          "user_id"     => $users->id,
          "email"       => trim($request->email),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Register Button",
          "data"        => trim($request->email)." melakukan pendaftaran akun baru",
          "link"        => url()->current()
        ]);

        if($logRegister->save()){
          Mail::send('administrator.dashboard.pages.email_page.verify', ['confirmation_code' => $confirmation_code], function($m) {
              $m->from('no-reply@loopinc.id', 'Loopinc.id');
              $m->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))
                  ->subject('Confirm your account at this email');
          });

          return response()->json(
              array(
                "response"  => "success"
              )
          );
        }else{
          return response()->json(
            array(
              "response"  => "failed"
            )
          );
        }



        // Session::flash('message', 'Terima kasih telah mendaftar! Silahkan cek email anda untuk konfirmasi.');
        //
        // return Redirect::to('user/pages/register');
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

  public function confirm($id){

    if(!$id)
    {
        echo "Link not registered";
    }

        $user = User::where('confirmation_code', $id)->first();

        if (!$user)
        {
            echo "Link not registered";
        }

        $user->active = '1';
        $user->confirmation_code = null;
        $user->save();

        Session::flash('message', 'Your account has been successfully verified, please log in!');

        return redirect('backend/pages/signin');
  }
}
