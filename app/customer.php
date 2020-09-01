<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
  protected $table = 'customer';
  public $timestamps = false;
  protected $fillable = ['nama_customer', 'tanggal_lahir', 'gender', 'alamat', 'id_customer'];
}
