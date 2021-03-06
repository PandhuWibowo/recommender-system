<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PenjelasanType extends Model{
  use SoftDeletes;
  protected $fillable = ['id','kepribadian_id','tipe_id','penjelasan_tipe_1','penjelasan_tipe_2'];
  protected $table = "penjelasan_tipes";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function getKepribadian(){
    return $this->belongsTo(Personality::class, "kepribadian_id");
  }

  public function getType(){
    return $this->belongsTo(Type::class, "tipe_id");
  }
}
