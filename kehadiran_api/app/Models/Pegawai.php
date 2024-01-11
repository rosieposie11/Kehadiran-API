<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'ID_Pegawai', 'Nama', 'Alamat', 'Tanggal_Angkat', 'Jabatan', 'Departemen', 'Gaji', 'Email', 'Nomor_Telepon'
    ];

}
