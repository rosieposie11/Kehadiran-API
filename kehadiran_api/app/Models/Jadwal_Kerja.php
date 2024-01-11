<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Kerja extends Model
{
    protected $fillable = [
        'ID_Jadwal','ID_Pegawai', 'Hari', 'Jam_Mulai', 'Jam_Selesai',
    ];

}
