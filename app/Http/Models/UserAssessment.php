<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserAssessment extends Model{
  use SoftDeletes;
  protected $fillable = ['id','user_id','assesment_id','status','maxattempt','attempt'];
  protected $table = "user_assesments";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  //
  // public function data_pertanyaan(){
  //   return $this->hasMany('App\Http\Models\Pertanyaan');
  // }

  public function data_user(){
    return $this->hasMany("App\Http\Models\User");
  }

  public function data_jenisAssessment(){
    return $this->hasMany("App\Http\Models\JenisAssesment");
  }

}
