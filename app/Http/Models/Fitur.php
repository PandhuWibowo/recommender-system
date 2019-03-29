<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Fitur extends Model{
  use SoftDeletes;
  protected $fillable = ['id','image','title','description'];
  protected $table = "features";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
