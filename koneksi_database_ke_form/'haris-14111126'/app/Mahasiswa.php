<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
  protected $table = 'mahasiswa';
	protected $fillable = ['id','nama', 'nim', 'alamat'];
	public $timestamps = false;
	protected $primaryKey ='id';//
}

