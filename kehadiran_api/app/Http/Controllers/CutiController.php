<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;

class CutiController extends Controller
{

    public function index()
    {
        $cuti = Cuti::all();
        return response()->json($cuti);

    }


    public function store(Request $request)
    {

        $cuti = new Cuti();

        $cuti->ID_Cuti = $request->input('ID_Cuti');
        $cuti->ID_Pegawai = $request->input('ID_Pegawai');
        $cuti->Tanggal_Mulai = $request->input('Tanggal_Mulai');
        $cuti->Tanggal_Selesai = $request->input('Tanggal_Selesai');
        $cuti->Jenis_Cuti = $request->input('Jenis_Cuti');
        $cuti->Keterangan = $request->input('Keterangan');

        $cuti->save();
        return response()->json($cuti);


    }


    public function show($id)
    {
        $cuti = Cuti::find($id);
        return response()->json($cuti);
    }


    public function update(Request $request, $id)
    {
        // PUT(id)
        // Update Info by Id

        $this->validate($request, [
            'ID_Cuti' => 'required',
            'ID_Pegawai' => 'required',
            'Tanggal_Mulai' => 'required',
            'Tanggal_Selesai' => 'required',
            'Jenis_Cuti' => 'required',
            'Keterangan' => 'required',
         ]);

        $cuti = Cuti::find($id);

        $cuti->ID_Cuti = $request->input('ID_Cuti');
        $cuti->ID_Pegawai = $request->input('ID_Pegawai');
        $cuti->Tanggal_Mulai = $request->input('Tanggal_Mulai');
        $cuti->Tanggal_Selesai = $request->input('Tanggal_Selesai');
        $cuti->Jenis_Cuti = $request->input('Jenis_Cuti');
        $cuti->Keterangan = $request->input('Keterangan');

        $cuti->save();

        return response()->json('Data Berhasil diupdate');

    }


    public function destroy($id)
    {
        // DELETE(id)
        // Delete by Id
        $cuti = Cuti::find($id);
        $cuti->delete();
        return response()->json('Data Berhasil dihapus');

    }
}
