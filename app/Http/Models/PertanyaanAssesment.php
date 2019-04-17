<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PertanyaanAssesment extends Model{
  use SoftDeletes;
  protected $fillable = ['id','ass_id','pertanyaan_id','jawaban_id','nilai'];
  protected $table = "pertanyaan_assesments";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function getAssessment(){
      return $this->belongsTo(Assessment::class,'ass_id');
  }

  // public function getPertanyaan(){
  //   return $this->belongsTo(Kompetensi::class, 'kompetensi_id');
  // }
  //
  // public function getJawaban(){
  //   return $this->belongsTo(RowScore::class, 'rowscore_id');
  // }

}
