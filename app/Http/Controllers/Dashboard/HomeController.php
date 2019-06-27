<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Models\User;
use App\Http\Models\Assesment;
use App\Http\Models\JenisAssesment;
use App\Http\Models\Pertanyaan;
/**
 *  HomeController
 */
class HomeController extends Controller
{

  public function index(){
    //Users data
    $allUsers         = User::where("level", "Participant")->count();
    $verifiedUsers    = User::where(
                          ["level"   => "Participant",
                          "active"  => "1"]
                        )->count();
    $disabledUsers    = User::where(
                          ["level"   => "Participant",
                          "active"  => "0"]
                        )->count();

    //Assessments
    $allTasks           = Assesment::all()->count();
    $finishedTasks      = Assesment::where("selesai","1")->count();
    $notYetFinishedTasks= Assesment::where("selesai","0")->count();

    //Assessments Type
    $allAssessmentsType = JenisAssesment::all()->count();

    //Questions
    $questions          = Pertanyaan::all()->count();
    return view('administrator.dashboard.pages.v_index', compact("allUsers","verifiedUsers","disabledUsers","allTasks","finishedTasks","notYetFinishedTasks","allAssessmentsType","questions"));
  }

}
