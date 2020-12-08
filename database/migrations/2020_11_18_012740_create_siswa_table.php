<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nik');
            $table->string('nis');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->text('alamat_lengkap');
            $table->string('no_hp');
            $table->string('asal_sekolah');
            $table->enum('agama', ['islam', 'katolik', 'hindu', 'budha', 'konghucu', 'protestan']);
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
        Schema::dropIfExists('siswa');
    }
}
