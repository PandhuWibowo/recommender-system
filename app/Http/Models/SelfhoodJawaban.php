<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SelfhoodJawaban extends Model{
  use SoftDeletes;
  protected $fillable = ['jawaban_id','kepribadian_id','selfhood_pertanyaan_id','assessment_id','opsi_jawaban','code_opsi_jawaban','no_urut_jawaban_kepribadian'];
  protected $table = "jawaban_kepribadians";
  protected $primaryKey = 'id';
  public $incrementing = false;

  public function getJenisAssessment(){
    return $this->belongsTo(JenisAssesment::class,"assessment_id");
  }

  public function getPertanyaan(){
    return $this->belongsTo(SelfhoodPertanyaan::class,"selfhood_pertanyaan_id");
  }

  public function getKepribadian(){
    return $this->belongsTo(Personality::class, "kepribadian_id");
  }
}
