<?php

namespace App\Http\Models\ModelLogs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ForgotPassword extends Model{
  use SoftDeletes;
  protected $fillable = ['email','ip_address','action','data','browser','link'];
  protected $connection = 'secondary';
  protected $table = "log_forgot_passwords";
  protected $primaryKey = 'id'; // or null
  // public $incrementing = false;
}
