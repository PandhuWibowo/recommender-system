<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Testimoni extends Model{
  use SoftDeletes;
  protected $fillable = ['id','foto','nama_testi','nama_instansi','pendapat_testimoni'];
  protected $table = "testimonis";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function get_user(){
    return $this->belongsTo(User::class,'nama_testi');
  }
}
