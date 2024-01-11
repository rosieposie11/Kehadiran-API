<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal_Kerja;

class Jadwal_KerjaController extends Controller
{

    public function index()
    {
        $jadwal_kerja = Jadwal_Kerja::all();
        return response()->json($jadwal_kerja);

    }


    public function store(Request $request)
    {

        $jadwal_kerja = new Jadwal_Kerja();

        $jadwal_kerja->ID_Jadwal = $request->input('ID_Jadwal');
        $jadwal_kerja->ID_Pegawai = $request->input('ID_Pegawai');
        $jadwal_kerja->Hari = $request->input('Hari');
        $jadwal_kerja->Jam_Masuk = $request->input('Jam_Mulai');
        $jadwal_kerja->Jam_Keluar = $request->input('Jam_Selesai');

        $jadwal_kerja->save();
        return response()->json($jadwal_kerja);


    }


    public function show($id)
    {
        $jadwal_kerja = Jadwal_Kerja::find($id);
        return response()->json($jadwal_kerja);
    }


    public function update(Request $request, $id)
    {
        // PUT(id)
        // Update Info by Id

        $this->validate($request, [
            'ID_Jadwal' => 'required',
            'ID_Pegawai' => 'required',
            'Hari' => 'required',
            'Jam_Mulai' => 'required',
            'Jam_Selesai' => 'required',
         ]);

        $jadwal_kerja = Jadwal_Kerja::find($id);

        $jadwal_kerja->ID_Jadwal = $request->input('ID_Jadwal');
        $jadwal_kerja->ID_Pegawai = $request->input('ID_Pegawai');
        $jadwal_kerja->Hari = $request->input('Hari');
        $jadwal_kerja->Jam_Masuk = $request->input('Jam_Mulai');
        $jadwal_kerja->Jam_Keluar = $request->input('Jam_Selesai');

        $jadwal_kerja->save();

        return response()->json('Data Berhasil diupdate');

    }


    public function destroy($id)
    {
        // DELETE(id)
        // Delete by Id
        $jadwal_kerja = Jadwal_Kerja::find($id);
        $jadwal_kerja->delete();
        return response()->json('Data Berhasil dihapus');

    }
}
