<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa')->nullable();
            $table->string('nama_lengkap');
            $table->foreignId('pendidikan_id')->nullable();
            $table->foreignId('pekerjaan_id')->nullable();
            $table->string('no_hp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('penghasilan_perbulan');
            $table->enum('is_live', ['hidup', 'meninggal']);
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
        Schema::dropIfExists('ayah');
    }
}
