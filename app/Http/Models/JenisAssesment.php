<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class JenisAssesment extends Model{
  use SoftDeletes;
  protected $fillable = ['id','nama'];
  protected $table = "jenis_assesments";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
