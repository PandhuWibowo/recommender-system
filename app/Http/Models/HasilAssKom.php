<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class HasilAssKom extends Model{
  use SoftDeletes;
  protected $fillable = ['keterangan_nilai_id','kompetensi_id','pertanyaan_id','assessment_id'];
  protected $table = "detail_hasils";
  // protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function getKeteranganNilai(){
    return $this->belongsTo(KeteranganNilai::class, 'keterangan_nilai_id');
  }

  public function getKompetensi(){
    return $this->belongsTo(Kompetensi::class, 'kompetensi_id');
  }

  public function getPertanyaan(){
      return $this->belongsTo(Pertanyaan::class,'pertanyaan_id');
  }

  public function getAssessment(){
    return $this->belongsTo(Assesment::class, 'assessment_id');
  }
}
