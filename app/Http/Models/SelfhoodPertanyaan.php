<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SelfhoodPertanyaan extends Model{
  use SoftDeletes;
  protected $fillable = ['id','no_urut_pertanyaan','assessment_id'];
  protected $table = "pertanyaan_kepribadians";
  protected $primaryKey = 'id';
  public $incrementing = false;

  public function getJenisAssessment(){
    return $this->belongsTo(JenisAssesment::class,"assessment_id");
  }

  public function getJawaban(){
    return $this->hasMany(SelfhoodJawaban::class);
  }
}
