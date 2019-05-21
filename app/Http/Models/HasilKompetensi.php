<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class HasilKompetensi extends Model{
  use SoftDeletes;
  protected $fillable = ['keterangan_nilai_id','kompetensi_id','hasil_kompetensi'];
  protected $table = "detail_kompetensis_keterangan_nilais";
  // protected $primaryKey = 'id';
  public $incrementing = false;

  public function getKeteranganNilai(){
      return $this->belongsTo(KeteranganNilai::class,'keterangan_nilai_id');
  }

  public function getKompetensi(){
    return $this->belongsTo(Kompetensi::class, 'kompetensi_id');
  }
}
