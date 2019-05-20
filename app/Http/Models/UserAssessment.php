<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserAssessment extends Model{
  use SoftDeletes;
  protected $fillable = ['user_id','jenis_assessment_id','status','maxattempt','attempt'];
  protected $table = "detail_users_jenis_assessments";
  // protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function get_users(){
    return $this->belongsTo(User::class,"user_id");
  }

  public function get_jenisAssessments(){
    return $this->belongsTo(JenisAssesment::class,"jenis_assessment_id");
  }

}
