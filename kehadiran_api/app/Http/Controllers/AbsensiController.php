<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;

class AbsensiController extends Controller
{

    public function index()
    {
        $absensi = Absensi::all();
        return response()->json($absensi);

    }


    public function store(Request $request)
    {

        $absensi = new Absensi();

        $absensi->ID_Absensi = $request->input('ID_Absensi');
        $absensi->ID_Pegawai = $request->input('ID_Pegawai');
        $absensi->Keterangan = $request->input('Keterangan');
        $absensi->Tanggal = $request->input('Tanggal');
        $absensi->Jam_Masuk = $request->input('Jam_Masuk');
        $absensi->Jam_Keluar = $request->input('Jam_Keluar');

        $absensi->save();
        return response()->json($absensi);


    }


    public function show($id)
    {
        $absensi = Absensi::find($id);
        return response()->json($absensi);
    }


    public function update(Request $request, $id)
    {
        // PUT(id)
        // Update Info by Id

        $this->validate($request, [
            'ID_Absensi' => 'required',
            'ID_Pegawai' => 'required',
            'Keterangan' => 'required',
            'Tanggal' => 'required',
            'Jam_Masuk' => 'required',
            'Jam_Keluar' => 'required',
         ]);

        $absensi = Absensi::find($id);

        $absensi->ID_Absensi = $request->input('ID_Absensi');
        $absensi->ID_Pegawai = $request->input('ID_Pegawai');
        $absensi->Keterangan = $request->input('Keterangan');
        $absensi->Tanggal = $request->input('Tanggal');
        $absensi->Jam_Masuk = $request->input('Jam_Masuk');
        $absensi->Jam_Keluar = $request->input('Jam_Keluar');

        $absensi->save();

        return response()->json('Data Berhasil diupdate');

    }


    public function destroy($id)
    {
        // DELETE(id)
        // Delete by Id
        $absensi = Absensi::find($id);
        $absensi->delete();
        return response()->json('Data Berhasil dihapus');

    }
}
