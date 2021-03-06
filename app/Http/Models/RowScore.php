<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class RowScore extends Model{
  use SoftDeletes;
  protected $fillable = ['id','nama_rowscore','nama_singkat','presentase','no_urut_rowscore'];
  protected $table = "rowscores";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function data_pertanyaan(){
    return $this->hasMany('App\Http\Models\Pertanyaan');
  }
}
