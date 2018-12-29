<?php

namespace App\Http\Controllers\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\LoginAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use Auth;
/**
 * Login Controller
 */

class LoginController extends Controller
{
  public function index(){
    if(!Session::get('login')){
      Session::flash('must-login', 'You have sign in first!');
      return redirect('backend/pages/signin');
    }else{
      return redirect('backend/pages/home');
    }
  }

  //Sign In Page
  public function auth()
  {
    return view("administrator.login.v_login");
  }

  public function auth_process(Request $request){
    $txtEmail   = strtolower(trim($request->email));
    $txtPassword= trim($request->password);

    $data = LoginAuth::where('email', $txtEmail)->where('active', '1')->first();

    if(count((array)$data) > 0){
      if(Hash::check($txtPassword,$data->password)){
        Session::put('first_name', $data->firstname);
        Session::put('last_name', $data->lastname);
        Session::put('nickname', $data->nickname);
        Session::put('email', $data->email);
        Session::put('username', $data->username);
        Session::put('level', $data->level);
        Session::put('active', $data->active);
        Session::put('image', $data->image);
        Session::put('login', TRUE);
        return response()->json(
          array(
            "response"  => "success",
            "level"     => $data->level,
          )
        );
      }else{
        return response()->json(
          array(
            'error' => "Oops, Password doesn't match"
          )
        );
      }
    }else{
      return response()->json(
        array(
          'null' => 'You have not been yet account, cause Your email has not been registered'
        )
      );
    }
  }

  public function mm_logout(){
      Session::flush();
      Session::flash('logout','You are already out');
      return redirect('backend/pages/signin');
  }
}
