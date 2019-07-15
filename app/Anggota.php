<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = [ 'nama', 'asal_sekolah', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'agama', 'alamat', 'foto', 'user_id', 'penghargaan_id' ];

    public function getFoto()
    {
      if(!$this->foto)
      {
      return asset('images/default.jpg');
      }
    return asset('images/'.$this->foto);
    }
}
