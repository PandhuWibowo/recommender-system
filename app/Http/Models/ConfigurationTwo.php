<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ConfigurationTwo extends Model{
  use SoftDeletes;
  protected $fillable = ['id','konfigurasi2'];
  protected $table = "konfigurasi_2s";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
