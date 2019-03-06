<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Models\RowScore;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use App\Http\Models\ModelLogs\DirectPage;
use App\Http\Models\ModelLogs\Rs;
use BrowserDetect;

/**
 * JenisAssesmentController
 */
class RowScoreController extends Controller
{
  public function index(Request $request){
    $logPages = new DirectPage([
      "user_id"     => Session::get("id"),
      "ip_address"  => $request->ip(),
      "browser"     => BrowserDetect::browserName(),
      "action"      => "Menu RowScore",
      "data"        => Session::get("email")." mengunjungi halaman Row Score",
      "link"        => url()->current()
    ]);

    $logPages->save();

    $rowscore = RowScore::all();
    return view("administrator.dashboard.pages.rowscore-page.v_index", compact("rowscore"));
  }

  public function store(Request $request){
    $rules = array(
      'nama_rowscore'   => 'required',
      'nama_singkat'    => 'required',
      'presentase'      => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return response()->json(
        array(
          'error' => $validator
        )
      );
    }
    else{
      $rowscore = new RowScore([
        'id'        => Uuid::generate()->string,
        'nama_rowscore'   => ucfirst(trim($request->nama_rowscore)),
        'nama_singkat'    => ucfirst(trim($request->nama_singkat)),
        'presentase'      => trim($request->presentase),
        'no_urut_rowscore'=> trim($request->no_urut_rowscore)
      ]);
      if($rowscore->save()){
        $log = new Rs([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Store Row Score - Store|Success",
          "data"        => "Berhasil menyimpan data baru Row Score - Row Score ID : ".$rowscore->id.", Nama Row Score : ".ucwords(trim($request->nama_rowscore)).", Nama Singkat : ".$request->nama_singkat.", Presentase : ".$request->presentase.
                           ", No Urut Row Score : ".$request->no_urut_rowscore,
          "link"        => url()->current()
        ]);

        $log->save();

        return response()->json(
            array(
              'response' => "success"
            )
        );
      }
      else{
        $log = new Rs([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Store Row Score - Store|Failed",
          "data"        => "Gagal menyimpan data baru Row Score - Row Score ID : ".$rowscore->id.", Nama Row Score : ".ucwords(trim($request->nama_rowscore)).", Nama Singkat : ".$request->nama_singkat.", Presentase : ".$request->presentase.
                           ", No Urut Row Score : ".$request->no_urut_rowscore,
          "link"        => url()->current()
        ]);

        $log->save();
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
      'id'              => 'required',
      'nama_rowscore'   => 'required',
      'nama_singkat'    => 'required',
      'presentase'      => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      $messages = $validator->messages();
      return response()->json(
        array(
          'error' => $validator
        )
      );
    }
    else{
      $rowscore        = RowScore::findOrFail(Crypt::decrypt($request->id));
      $rowscore->nama_rowscore    = $request->nama_rowscore;
      $rowscore->nama_singkat     = $request->nama_singkat;
      $rowscore->presentase       = $request->presentase;
      $rowscore->no_urut_rowscore = $request->no_urut_rowscore;
      if($rowscore->save()){
        $log = new Rs([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Row Score - Update|Success",
          "data"        => "Berhasil mengubah data Row Score - Row Score ID : ".$request->id.", Nama Row Score : ".ucwords(trim($request->nama_rowscore)).", Nama Singkat : ".$request->nama_singkat.", Presentase : ".$request->presentase.
                           ", No Urut Row Score : ".$request->no_urut_rowscore,
          "link"        => url()->current()
        ]);

        $log->save();
        return response()->json(
            array(
              'response' => "success"
            )
        );
      }else{
        $log = new Rs([
          "user_id"     => Session::get("id"),
          "ip_address"  => $request->ip(),
          "browser"     => BrowserDetect::browserName(),
          "action"      => "Update Row Score - Update|Failed",
          "data"        => "Gagal mengubah data Row Score - Row Score ID : ".$request->id.", Nama Row Score : ".ucwords(trim($request->nama_rowscore)).", Nama Singkat : ".$request->nama_singkat.", Presentase : ".$request->presentase.
                           ", No Urut Row Score : ".$request->no_urut_rowscore,
          "link"        => url()->current()
        ]);

        $log->save();
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
    $data = RowScore::where('id', $txtId)->first();
    if(RowScore::where('id',$txtId)->delete()){
      $log = new Rs([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Row Score - Delete|Success",
        "data"        => "Berhasil menghapus data Row Score - Row Score ID : ".$data->id.", Nama Row Score : ".ucwords(trim($data->nama_rowscore)).", Nama Singkat : ".$data->nama_singkat.", Presentase : ".$data->presentase.
                         ", No Urut Row Score : ".$data->no_urut_rowscore,
        "link"        => url()->current()
      ]);

      $log->save();
      return response()->json(
        array(
          'response'  => "success"
        )
      );
    }else{
      $log = new Rs([
        "user_id"     => Session::get("id"),
        "ip_address"  => $request->ip(),
        "browser"     => BrowserDetect::browserName(),
        "action"      => "Delete Row Score - Delete|Failed",
        "data"        => "Gagal menghapus data Row Score - Row Score ID : ".$data->id.", Nama Row Score : ".ucwords(trim($data->nama_rowscore)).", Nama Singkat : ".$data->nama_singkat.", Presentase : ".$data->presentase.
                         ", No Urut Row Score : ".$data->no_urut_rowscore,
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
