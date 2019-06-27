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
use Mail;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

/**
 * AdministratorController
 */
class UserController extends Controller
{

    public function index(Request $request){
      $dataUsers = User::where('level', 'Participant')->orderBy('firstname', 'desc')->get();
      return view("administrator.dashboard.pages.user-master-page.v_index", compact('dataUsers'));
    }

    public function show($id, Request $request){
      $decryptId            = Crypt::decrypt($id);

      $dataUsers            = User::where('level','Participant')->where('id',$decryptId)->first();
      return view("administrator.dashboard.pages.user-master-page.detail.v_view", compact('dataUsers'));
    }

    public function add(Request $request){
      return view("administrator.dashboard.pages.user-master-page.v_add_user");
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
      $fullName           = ucfirst(trim($request->firstname))." ".ucfirst(trim($request->lastname));

      $validator = Validator::make(Input::all(), $rules);
      // request()->validate([
      //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      // ]);

      if ($validator->fails()) {
        $messages = $validator->messages();
        Session::put("firstname_user_new", ucfirst(trim($request->firstname)));
        Session::put("lastname_user_new", ucfirst(trim($request->lastname)));
        Session::put("email_user_new", trim($request->email));
        Session::put("phone_user_new", trim($request->phone));
        Session::put("address_user_new", ucfirst(trim($request->address)));
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
            'email'     => trim($request->email),
            'phone'     => trim($request->phone),
            'level'     => trim($request->level),
            'address'   => ucfirst(trim($request->address)),
            'password'  => Hash::make($request->password),
            'image'     => $txtImageName,
            'active'    => '0',
            'confirmation_code' => $confirmation_code
          ]);

          if($users->save()){
            Mail::send('administrator.dashboard.pages.email_page.verify', ['confirmation_code' => $confirmation_code, 'fullName' => $fullName], function($m) {
                $m->from('no-reply@loopinc.id', 'Loopinc.id');
                $m->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))
                    ->subject('Confirm your account');
            });

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

    //TODO: Import from Excel
    public function importUsersData(Request $request){
			if (empty($request->file('file')))
	    {
	        return back()->with('success','No file selected');
	    }
	    else{
				// validasi
				$this->validate($request, [
					'file' => 'required|mimes:csv,xls,xlsx'
				]);

				// menangkap file excel
				$file = $request->file('file');

				// membuat nama file unik
				$nama_file = rand().$file->getClientOriginalName();

				// upload ke folder file_siswa di dalam folder public
				$file->move(public_path('dataset'), $nama_file);

				Excel::import(new UsersImport, public_path('/dataset/'.$nama_file));

	      return back();
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
        $updateUsers            = User::findOrFail($decryptId);
        $updateUsers->firstname = $txtFirstName;
        $updateUsers->lastname  = $txtLastName;
        $updateUsers->address   = $txtAddress;
        $updateUsers->phone     = $txtPhone;
        $updateUsers->email     = $txtEmail;

        if($updateUsers->save()){
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
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $txtImageName             = "PA-".time().'.'.request()->image->getClientOriginalExtension();

        $updateUsers            = User::findOrFail($decryptId);
        $updateUsers->firstname = $txtFirstName;
        $updateUsers->lastname  = $txtLastName;
        $updateUsers->address   = $txtAddress;
        $updateUsers->phone     = $txtPhone;
        $updateUsers->email     = $txtEmail;
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

      $data = User::where('id', $txtId)->first();

      if(User::where('id',$txtId)->delete()){
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
