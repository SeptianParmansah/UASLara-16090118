<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
  protected $table = 'kegiatan';
  protected $fillable = [ 'nama_kegiatan', 'alamat', 'foto', 'keterangan' ];

  // public function getFoto()
  // {
  //   if(!$this->foto)
  //   {
  //   return asset('images/default.jpg');
  //   }
  // return asset('images/'.$this->foto);
  // }
}
