<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class HasilKompetensi extends Model{
  use SoftDeletes;
  protected $fillable = ['id','keterangan_id','kompetensi_id','hasil_kompetensi'];
  protected $table = "hasils";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function getKeteranganNilai(){
      return $this->belongsTo(KeteranganNilai::class,'keterangan_id');
  }

  public function getKompetensi(){
    return $this->belongsTo(Kompetensi::class, 'kompetensi_id');
  }
}
