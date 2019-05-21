<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Kompetensi extends Model{
  use SoftDeletes;
  protected $fillable = ['id','kompetensi','definisi','p_mandiri','p_bermitra','t_pelatihan'];
  protected $table = "kompetensis";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function data_pertanyaan(){
    return $this->hasMany('App\Http\Models\Pertanyaan');
  }
}
