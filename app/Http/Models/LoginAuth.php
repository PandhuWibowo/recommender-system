<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LoginAuth extends Model{
  use SoftDeletes;
  protected $fillable = ['id','email','password','firstname','lastname','phone','address','image','level','active','confirmation_code','code_reset_password'];
  protected $table = "users";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
