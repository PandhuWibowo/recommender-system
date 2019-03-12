<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Configuration extends Model{
  use SoftDeletes;
  protected $fillable = ['id','konfigurasi'];
  protected $table = "konfigurasis";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
