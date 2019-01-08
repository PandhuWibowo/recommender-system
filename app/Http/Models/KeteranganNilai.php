<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class KeteranganNilai extends Model{
  use SoftDeletes;
  protected $fillable = ['id','range_score','keterangan'];
  protected $table = "keterangan_nilais";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
