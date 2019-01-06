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

  // public function get_assesment(){
  //     return $this->belongsTo(JenisAssesment::class,'assesment_id');
  // }
  //
  // public function get_kompetensi(){
  //   return $this->belongsTo(Kompetensi::class, 'kompetensi_id');
  // }
  //
  // public function get_rowscore(){
  //   return $this->belongsTo(RowScore::class, 'rowscore_id');
  // }
  //
  // public function data_jawabans(){
  //   return $this->hasMany('App\Http\Models\Jawaban');
  // }
  //
  // public function get_jawaban(){
  //   return $this->hasMany(Jawaban::class);
  // }
}
