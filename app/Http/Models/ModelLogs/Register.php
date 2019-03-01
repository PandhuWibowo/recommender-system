<?php

namespace App\Http\Models\ModelLogs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Register extends Model{
  use SoftDeletes;
  protected $fillable = ['user_id','email','ip_address','action','data','browser','link'];
  protected $connection = 'secondary';
  protected $table = "log_registers";
  protected $primaryKey = 'id'; // or null
  // public $incrementing = false;
}
