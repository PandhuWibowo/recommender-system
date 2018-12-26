<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Jawaban extends Model{
  use SoftDeletes;
  protected $fillable = ['id','pertanyaan_id','jawaban','nilai'];
  protected $table = "jawabans";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function get_pertanyaan(){
      return $this->belongsTo(Pertanyaan::class,'pertanyaan_id');
  }
}
