<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pertanyaan extends Model{
  use SoftDeletes;
  protected $fillable = ['id','pertanyaan','assesment_id','kompetensi_id','rowscore_id'];
  protected $table = "pertanyaans";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function get_assesment(){
      return $this->belongsTo(JenisAssesment::class,'assesment_id');
  }

  public function get_kompetensi(){
    return $this->belongsTo(Kompetensi::class, 'kompetensi_id');
  }

  public function get_rowscore(){
    return $this->belongsTo(RowScore::class, 'rowscore_id');
  }

  public function data_jawabans(){
    return $this->hasMany('App\Http\Models\Jawaban');
  }

  public function get_jawaban(){
    return $this->hasMany(Jawaban::class);
  }
}
