<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
  protected $table = 'penghargaan';
  protected $fillable = [ 'nama_penghargaan', 'foto', 'keterangan' ];
}
