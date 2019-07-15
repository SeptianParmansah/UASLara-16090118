<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nama');
          $table->string('asal_sekolah');
          $table->String('jenis_kelamin');
          // $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
          $table->date('tanggal_lahir');
          $table->string('tempat_lahir');
          $table->string('agama');
          $table->text('alamat');
          $table->String('user_id');
          $table->String('penghargaan_id');
          $table->string('image');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
