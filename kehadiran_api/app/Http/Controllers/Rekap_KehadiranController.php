<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekap_Kehadiran;

class Rekap_KehadiranController extends Controller
{

    public function index()
    {
        $rekap_kehadiran = Rekap_Kehadiran::all();
        return response()->json($rekap_kehadiran);

    }


    public function store(Request $request)
    {

        $rekap_kehadiran = new Rekap_Kehadiran();

        $rekap_kehadiran->ID_Rekap = $request->input('ID_Rekap');
        $rekap_kehadiran->ID_Pegawai = $request->input('ID_Pegawai');
        $rekap_kehadiran->Bulan = $request->input('Bulan');
        $rekap_kehadiran->Tahun = $request->input('Tahun');
        $rekap_kehadiran->Jumlah_Hadir = $request->input('Jumlah_Hadir');
        $rekap_kehadiran->Jumlah_Izin = $request->input('Jumlah_Izin');
        $rekap_kehadiran->Jumlah_Sakit = $request->input('Jumlah_Sakit');
        $rekap_kehadiran->Jumlah_Cuti = $request->input('Jumlah_Cuti');

        $rekap_kehadiran->save();
        return response()->json($rekap_kehadiran);


    }


    public function show($id)
    {
        $rekap_kehadiran = Rekap_Kehadiran::find($id);
        return response()->json($rekap_kehadiran);
    }


    public function update(Request $request, $id)
    {
        // PUT(id)
        // Update Info by Id

        $this->validate($request, [
            'ID_Rekap' => 'required',
            'ID_Pegawai' => 'required',
            'Bulan' => 'required',
            'Tahun' => 'required',
            'Jumlah_Hadir' => 'required',
            'Jumlah_Izin' => 'required',
            'Jumlah_Sakit' => 'required',
            'Jumlah_Cuti' => 'required',
         ]);

        $rekap_kehadiran = Rekap_Kehadiran::find($id);

        $rekap_kehadiran->ID_Rekap = $request->input('ID_Rekap');
        $rekap_kehadiran->ID_Pegawai = $request->input('ID_Pegawai');
        $rekap_kehadiran->Bulan = $request->input('Bulan');
        $rekap_kehadiran->Tahun = $request->input('Tahun');
        $rekap_kehadiran->Jumlah_Hadir = $request->input('Jumlah_Hadir');
        $rekap_kehadiran->Jumlah_Izin = $request->input('Jumlah_Izin');
        $rekap_kehadiran->Jumlah_Sakit = $request->input('Jumlah_Sakit');
        $rekap_kehadiran->Jumlah_Cuti = $request->input('Jumlah_Cuti');

        $rekap_kehadiran->save();

        return response()->json('Data Berhasil diupdate');

    }


    public function destroy($id)
    {
        // DELETE(id)
        // Delete by Id
        $rekap_kehadiran = Rekap_Kehadiran::find($id);
        $rekap_kehadiran->delete();
        return response()->json('Data Berhasil dihapus');

    }
}
