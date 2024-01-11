<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $fillable = [
        'ID_Cuti','ID_Pegawai', 'Tanggal_Mulai', 'Tanggal_Selesai', 'Jenis_Cuti', 'Keterangan'
    ];

}
