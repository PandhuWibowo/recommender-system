<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LoginAuth extends Model{
  use SoftDeletes;
  protected $fillable = ['id','email','username','password','firstname','lastname','nickname','phone','address','image','level','active'];
  protected $table = "users";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
