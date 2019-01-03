<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Assesment extends Model{
  use SoftDeletes;
  protected $fillable = ['id','user_id','tanggal_akses'];
  protected $table = "assesments";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;

  public function get_user(){
      return $this->belongsTo(User::class,'user_id');
  }
}