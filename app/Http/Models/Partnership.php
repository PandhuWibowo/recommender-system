<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Partnership extends Model{
  use SoftDeletes;
  protected $fillable = ['id','nama','institusi','no_pe','kebutuhan'];
  protected $table = "partner_kerja_samas";
  protected $primaryKey = 'id'; // or null
  public $incrementing = false;
}
