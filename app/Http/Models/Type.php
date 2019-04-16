<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Type extends Model{
  use SoftDeletes;
  protected $fillable = ['id','assessment_id','keterangan_tipe_1','keterangan_tipe_2'];
  protected $table = "tipe_kepribadians";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function getAssessment(){
    return $this->belongsTo(JenisAssesment::class, "assessment_id");
  }
}
