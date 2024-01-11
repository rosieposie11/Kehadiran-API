<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwal_KerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kerja', function (Blueprint $table) {
            $table->id('ID_Jadwal');
            $table->integer('ID_Pegawai');
            $table->text('Hari');
            $table->text('Jam_Mulai');
            $table->text('Jam_Selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_kerja');
    }
}
