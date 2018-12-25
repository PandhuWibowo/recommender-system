<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class RowScore extends Model{
  use SoftDeletes;
  protected $fillable = ['id','nama_rowscore','nama_singkat','presentase'];
  protected $table = "rowscores";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
