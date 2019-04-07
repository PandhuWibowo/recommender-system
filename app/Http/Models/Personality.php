<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Personality extends Model{
  use SoftDeletes;
  protected $fillable = ['id','nama','kode_nama','assessment_id'];
  protected $table = "kepribadians";
  protected $primaryKey = 'id';
  public $incrementing = false;

  public function getJenisAssessment(){
    return $this->belongsTo(JenisAssesment::class,"assessment_id");
  }
}
