<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('ID_Pegawai');
            $table->text('Nama');
            $table->text('Alamat');
            $table->int('Tanggal_Angkat');
            $table->text('Jabatan');
            $table->text('Departemen');
            $table->int('Gaji');
            $table->text('Email');
            $table->int('Nomor_Telepon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
