<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class HasilAssKom extends Model{
  use SoftDeletes;
  protected $fillable = ['id','keteranganhasil_id','asskom_id'];
  protected $table = "hasil_nilai_asskoms";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;


  public function getKeteranganHasil(){
      return $this->belongsTo(HasilKompetensi::class,'keteranganhasil_id');
  }

  public function getAssessmentKompetensi(){
    return $this->belongsTo(AssessmentKompetensi::class, 'asskom_id');
  }
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
