<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Kehadiran;

class Jenis_KehadiranController extends Controller
{

    public function index()
    {
        $jenis_kehadiran = Jenis_Kehadiran::all();
        return response()->json($jenis_kehadiran);

    }


    public function store(Request $request)
    {

        $jenis_kehadiran = new Jenis_Kehadiran();

        $jenis_kehadiran->ID_Jenis = $request->input('ID_Jenis');
        $jenis_kehadiran->Jenis_Kehadiran = $request->input('Jenis_Kehadiran');
        $jenis_kehadiran->Deskripsi = $request->input('Deskripsi');

        $jenis_kehadiran->save();
        return response()->json($jenis_kehadiran);


    }


    public function show($id)
    {
        $jenis_kehadiran = Jenis_Kehadiran::find($id);
        return response()->json($jenis_kehadiran);
    }


    public function update(Request $request, $id)
    {
        // PUT(id)
        // Update Info by Id

        $this->validate($request, [
            'ID_Jenis' => 'required',
            'ID_Pegawai' => 'required',
            'Deskripsi' => 'required',
         ]);

        $jenis_kehadiran = Jenis_Kehadiran::find($id);

        $jenis_kehadiran->ID_Jenis = $request->input('ID_Jenis');
        $jenis_kehadiran->Jenis_Kehadiran = $request->input('Jenis_Kehadiran');
        $jenis_kehadiran->Deskripsi = $request->input('Deskripsi');

        $jenis_kehadiran->save();

        return response()->json('Data Berhasil diupdate');

    }


    public function destroy($id)
    {
        // DELETE(id)
        // Delete by Id
        $jenis_kehadiran = Jenis_Kehadiran::find($id);
        $jenis_kehadiran->delete();
        return response()->json('Data Berhasil dihapus');

    }
}
