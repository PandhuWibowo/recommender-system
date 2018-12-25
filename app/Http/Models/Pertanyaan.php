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

  public function get_event(){
      return $this->belongsTo(Event::class,'event_id');
  }
}
