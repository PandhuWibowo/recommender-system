<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\Kompetensi;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
/**
 * KompetensiController
 */
class KompetensiController extends Controller
{
  public function index(Request $request){
    $dataKompetensis = Kompetensi::all();
    return view("administrator.dashboard.pages.kompetensi-page.v_index", compact("dataKompetensis"));
  }

  public function store(Request $request){
    $rules = array(
      'kompetensi'  => 'required',
      'definisi'    => 'required',
      'p_mandiri'   => 'required',
      'p_bermitra'  => 'required',
      't_pelatihan' => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $message = $validator->getMessageBag()->toArray();
      if(!empty($message["kompetensi"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["kompetensi"]
          )
        );
      }else if(!empty($message["definisi"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["definisi"]
          )
        );
      }
      else if(!empty($message["p_mandiri"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["p_mandiri"]
          )
        );
      }
      else if(!empty($message["p_bermitra"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["p_bermitra"]
          )
        );
      }
      else if(!empty($message["t_pelatihan"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["t_pelatihan"]
          )
        );
      }
    }
    else{
      $assesment = new Kompetensi([
        'id'                => Uuid::generate()->string,
        'kompetensi'        => ucfirst(trim($request->kompetensi)),
        'definisi'          => ucfirst(trim($request->definisi)),
        'p_mandiri'         => ucfirst(trim($request->p_mandiri)),
        'p_bermitra'        => ucfirst(trim($request->p_bermitra)),
        't_pelatihan'       => ucfirst(trim($request->t_pelatihan)),
      ]);

      if($assesment->save()){
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        return response()->json(
            array(
              'response' => "failed"
            )
        );
      }
    }
  }

  public function update(Request $request){
    $rules = array(
      'id'          => 'required',
      'kompetensi'  => 'required',
      'definisi'    => 'required',
      'p_mandiri'   => 'required',
      'p_bermitra'  => 'required',
      't_pelatihan' => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $message = $validator->getMessageBag()->toArray();
      if(!empty($message["kompetensi"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["kompetensi"]
          )
        );
      }else if(!empty($message["definisi"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["definisi"]
          )
        );
      }
      else if(!empty($message["p_mandiri"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["p_mandiri"]
          )
        );
      }
      else if(!empty($message["p_bermitra"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["p_bermitra"]
          )
        );
      }
      else if(!empty($message["t_pelatihan"])){
        return response()->json(
          array(
            "response"  => "errors",
            "errors"      => $message["t_pelatihan"]
          )
        );
      }
    }
    else{
      $assesment                      = Kompetensi::findOrFail(Crypt::decrypt($request->id));
      $assesment->kompetensi          = $request->kompetensi;
      $assesment->definisi            = $request->definisi;
      $assesment->p_mandiri           = $request->p_mandiri;
      $assesment->p_bermitra          = $request->p_bermitra;
      $assesment->t_pelatihan         = $request->t_pelatihan;
      if($assesment->save()){
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        return response()->json(
            array(
              'response' => "failed"
            )
        );
      }
    }
  }

  public function destroy(Request $request){
    $txtId    = Crypt::decrypt($request->id);

    if (Kompetensi::where('id',$txtId)->delete()) {
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
