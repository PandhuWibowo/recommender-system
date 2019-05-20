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
use Mail;
/**
 * Register Controller
 */

class RegisterController extends Controller
{
  //TODO: Showing front of page registration
  public function index(){
    return view("partisipan.register.v_register");
  }

  //TODO: Storing value into database
  public function store(Request $request){
    ini_set('memory_limit', '-1');
    $rules = array(
      'firstname'             => 'required|max:255',
      'lastname'              => 'required|max:255',
      'email'                 => 'required|email|unique:users|max:255',
      'phone'                 => 'required|numeric',
      'password'              => 'required|min:6|max:30',
      'confirm_password'      => 'required|same:password'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      //Rumus Session
      // Session::put('st_firstname', $request->firstname);
      $message = $validator->getMessageBag()->toArray();
      if(!empty($message["email"])){
        return response()->json(
          array(
            "response"  => "failed",
            "errors"      => $message["email"]
          )
        );
      }else if(!empty($message["password"])){
        return response()->json(
          array(
            "response"  => "failed",
            "errors"      => $message["password"]
          )
        );
      }
      else if(!empty($message["phone"])){
        return response()->json(
          array(
            "response"  => "failed",
            "errors"      => $message["phone"]
          )
        );
      }else if(!empty($message["confirm_password"])){
        return response()->json(
          array(
            "response"  => "failed",
            "errors"      => $message["confirm_password"]
          )
        );
      }
      // return Redirect::to('user/pages/register')
      //   ->withErrors($validator);
    }
    else{
      $confirmation_code  = str_random(30);

      $fullName           = ucfirst(trim($request->firstname))." ".ucfirst(trim($request->lastname));

      $users = User::create([
        'id'                    => Uuid::generate()->string,
        'firstname'             => ucfirst(trim($request->firstname)),
        'lastname'              => ucfirst(trim($request->lastname)),
        'email'                 => trim($request->email),
        'phone'                 => trim($request->phone),
        'password'              => Hash::make($request->password),
        'confirmation_code'     => $confirmation_code
      ]);

      //TODO: Send Verification Email to Siswa/i
      Mail::send('administrator.dashboard.pages.email_page.verify', ['confirmation_code' => $confirmation_code, 'fullName' => $fullName], function($m) {
          $m->from('no-reply@loopinc.id', 'Loopinc.id');
          $m->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))
              ->subject('Confirm your account');
      });

      //TODO: Show alert success when Siswa/o has been success to registration
      return response()->json(
          array(
            "response"  => "success"
          )
      );
    }
  }

  //TODO: Link page for verification email
  public function confirm($id, Request $request){
    if(!$id)
    {
        $user = User::where('confirmation_code', $id)->first();
        return view("administrator.dashboard.pages.email_page.check_link.v_wrong_link");
    }
        $user = User::where('confirmation_code', $id)->first();

        if (!$user)
        {
          return view("administrator.dashboard.pages.email_page.check_link.v_wrong_link");
        }else{
          $user->active = '1';
          $user->confirmation_code = null;
          $user->save();

          Session::flash('message', 'Your account has been successfully verified, please log in!');

          return redirect('backend/pages/signin');
        }
  }

  public function continueIndex(Request $request){
    $continueRegister = User::where("id",Session::get("id"))->first();

    return view("partisipan.register.v_continueregister", compact("continueRegister"));
  }
}
