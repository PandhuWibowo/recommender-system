<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Model{
  use SoftDeletes;
  protected $fillable = ['id','email','password','firstname','lastname','phone','address','image','level','active','confirmation_code','code_reset_password'];
  protected $table = "users";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function data_pertanyaan(){
      return $this->hasMany("App\Http\Models\Pertanyaan");
  }

  public function data_assessment(){
    return $this->hasMany("App\Http\Models\Assesment");
  }

  public function data_testimoni(){
    return $this->hasMany("App\Http\Models\Testimoni");
  }
}
