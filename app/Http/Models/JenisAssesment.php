<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class JenisAssesment extends Model{
  use SoftDeletes;
  protected $fillable = ['id','nama'];
  protected $table = "jenis_assessments";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function data_pertanyaan(){
    return $this->hasMany('App\Http\Models\Pertanyaan');
  }

  // public function data_kepribadian(){
  //   return $this->hasMany('App\Http\Models\Personality');
  // }
  //
  // public function getType(){
  //   return $this->hasMany("App\Http\Models\Type");
  // }
}
