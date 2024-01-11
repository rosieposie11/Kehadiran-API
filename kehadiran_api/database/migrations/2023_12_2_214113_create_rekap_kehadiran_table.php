<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekap_KehadiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_kehadiran', function (Blueprint $table) {
            $table->id('ID_Rekap');
            $table->integer('ID_Pegawai');
            $table->integer('Bulan');
            $table->integer('Tahun');
            $table->integer('Jumlah_Hadir');
            $table->integer('Jumlah_Izin');
            $table->integer('Jumlah_Sakit');
            $table->integer('Jumlah_Cuti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekap_kehadiran');
    }
}
