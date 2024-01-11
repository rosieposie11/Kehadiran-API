<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = [
        'ID_Absensi','ID_Pegawai', 'Tanggal', 'Jam_Masuk', 'Jam_Keluar', 'Keterangan'
    ];

}
