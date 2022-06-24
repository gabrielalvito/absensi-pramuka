<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_siswa');
            $table->integer('id_pembina');
            $table->date('tanggal_absen');
            $table->date('j_masuk');
            $table->string('st_masuk');
            $table->string('foto');
            $table->string('ket');
            $table->integer('hadir');
            $table->integer('sakit');
            $table->integer('ijin');
            $table->integer('alpha');
            $table->softDeletes();
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
        Schema::dropIfExists('presensi');
    }
}
