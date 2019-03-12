<?php

namespace App\Http\Controllers\Dashboard\User\ForgotPassword;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;
use App\Http\Models\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\ModelLogs\ForgotPassword;
use BrowserDetect;

/**
 * ForgotPasswordController
 */
class ForgotPasswordController extends Controller
{
  public function index(){
    return view("forgotpassword.v_index");
  }

  public function sendEmail(Request $request)
  {
    $email              = $request->email;

    $confirmation_code  = str_random(30);

    $user = User::where("email", $email)->select("email","id")->first();

    if($user == null || $user == ""){
      $logFP = new ForgotPassword([
        "email"       => trim($request->email),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "ForgotPassword Button",
        "data"        => trim($request->email)." tidak ada di database",
        "link"        => url()->current()
      ]);

      $logFP->save();

      Session::flash("failed-reset-password","Email has not been at our database");
      return redirect("backend/pages/signin");
    }else{
      $update = User::findOrFail($user->id);
      $update->code_reset_password  = $confirmation_code;
      $update->save();

      $logFP = new ForgotPassword([
        "email"       => trim($request->email),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "ForgotPassword Button",
        "data"        => trim($request->email)." melakukan lupa password yang dikirim di email",
        "link"        => url()->current()
      ]);

      $logFP->save();

      Mail::send('administrator.dashboard.pages.email_page.reset', ['code_reset_password' => $confirmation_code], function($m) {
          $m->from('no-reply@loopinc.id', 'Loopinc.id');
          $m->to(Input::get('email'))
              ->subject('Do you wanna change password?');
      });

      Session::flash("reset-password","Please check your email");
      return redirect("backend/pages/signin");
    }
  }

  public function reset($id, Request $request){

    if(!$id)
    {
        $user = User::where('code_reset_password', $id)->first();

        echo "Link not registered";

        $logFP = new ForgotPassword([
          "email"       => trim($user->email),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "ForgotPassword Button",
          "data"        => trim($request->email)." Link tidak terdaftar",
          "link"        => url()->current()
        ]);

        $logFP->save();
    }

        $user = User::where('code_reset_password', $id)->first();

        if (!$user)
        {
            echo "Link not registered";

            $logFP = new ForgotPassword([
              "email"       => trim($user->email),
              "ip_address"  => $request->ip(),
              "browser"     => BrowserDetect::browserName(),
              "action"      => "ForgotPassword Button",
              "data"        => trim($user->email)." Link tidak terdaftar",
              "link"        => url()->current()
            ]);

            $logFP->save();
        }else{
          $logFP = new ForgotPassword([
            "email"       => trim($user->email),
            "ip_address"  => $request->ip(),
            "browser"     => BrowserDetect::browserName(),
            "action"      => "Link ForgotPassword Button",
            "data"        => trim($user->email)." pergi ke halaman Reset Password",
            "link"        => url()->current()
          ]);

          $logFP->save();

          return view('administrator.dashboard.pages.email_page.reset_form', compact("user","id"));
        }
  }

  public function update(Request $request){
    $rules = array(
      'email'             => 'required|email|max:255',
      'password'          => 'required|min:6|max:30',
      'confirm_password'  => 'required|same:password'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      //Rumus Session
      // Session::put('st_firstname', $request->firstname);
      $messages = $validator->messages();

      $logFP = new ForgotPassword([
        "email"       => trim($request->email),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Submit ForgotPassword Button",
        "data"        => $messages,
        "link"        => url()->current()
      ]);

      $logFP->save();
      return Redirect::to('user/pages/changepassword/'.Crypt::decrypt($request->code_reset_password))
        ->withErrors($validator);
    }else{
      $update = User::findOrFail(Crypt::decrypt($request->id));

      $update->password             = Hash::make($request->password);
      $update->code_reset_password  = Crypt::decrypt($request->code_reset_password);
      $update->save();

      $logFP = new ForgotPassword([
        "email"       => trim($request->email),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Submit ForgotPassword Button",
        "data"        => "Berhasil ForgotPassword diubah",
        "link"        => url()->current()
      ]);

      $logFP->save();

      Session::flash("changed","You has been changed");
      return redirect("backend/pages/signin");
    }
  }
}
