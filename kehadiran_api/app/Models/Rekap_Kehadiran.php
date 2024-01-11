<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekap_Kehadiran extends Model
{
    protected $fillable = [
        'ID_Rekap','ID_Pegawai', 'Bulan', 'Tahun', 'Jumlah_Hadir', 'Jumlah_Izin', 'Jumlah_Sakit', 'Jumlah_Cuti'
    ];

}
