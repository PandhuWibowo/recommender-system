<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SelfhoodJawaban extends Model{
  use SoftDeletes;
  protected $fillable = ['kepribadian_id','pertanyaan_kepribadian_id','assessment_id','opsi_jawaban'];
  protected $table = "jawaban_kepribadians";
  // protected $primaryKey = 'id';
  public $incrementing = false;

  public function getJenisAssessment(){
    return $this->belongsTo(JenisAssesment::class,"assessment_id");
  }

  public function getPertanyaan(){
    return $this->belongsTo(SelfhoodPertanyaan::class,"pertanyaan_kepribadian_id");
  }

  public function getKepribadian(){
    return $this->belongsTo(Personality::class, "kepribadian_id");
  }
}
