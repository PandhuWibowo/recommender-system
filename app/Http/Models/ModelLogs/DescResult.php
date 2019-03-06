<?php

namespace App\Http\Models\ModelLogs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DescResult extends Model{
  use SoftDeletes;
  protected $fillable = ['user_id','ip_address','action','data','browser','link'];
  protected $connection = 'secondary';
  protected $table = "log_descresults";
  protected $primaryKey = 'id'; // or null
  // public $incrementing = false;
}
