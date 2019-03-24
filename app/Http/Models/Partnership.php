<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Partnership extends Model{
  use SoftDeletes;
  protected $fillable = ['id','nama_depan','institusi','no_pe','kebutuhan','nama_belakang','subject','email'];
  protected $table = "partner_kerja_samas";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
