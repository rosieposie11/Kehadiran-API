<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{

    public function index()
    {
        $pegawai = Pegawai::all();
        return response()->json($pegawai);

    }


    public function store(Request $request)
    {

        $pegawai = new Pegawai();

        $pegawai->ID_Pegawai = $request->input('ID_Pegawai');
        $pegawai->Nama = $request->input('Nama');
        $pegawai->Alamat = $request->input('Alamat');
        $pegawai->Tanggal_Angkat = $request->input('Tanggal_Angkat');
        $pegawai->Jabatan = $request->input('Jabatan');
        $pegawai->Departemen = $request->input('Departemen');
        $pegawai->Gaji = $request->input('Gaji');
        $pegawai->Email = $request->input('Email');
        $pegawai->Nomor_Telepon = $request->input('Nomor_Telepon');

        $pegawai->save();
        return response()->json($pegawai);


    }


    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return response()->json($pegawai);
    }


    public function update(Request $request, $id)
    {
        // PUT(id)
        // Update Info by Id

        $this->validate($request, [
            'ID_Pegawai' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Tanggal_Angkat' => 'required',
            'Jabatan' => 'required',
            'Departemen' => 'required',
            'Gaji' => 'required',
            'Email' => 'required',
            'Nomor_Telepon' => 'required',
         ]);

        $pegawai = Pegawai::find($id);

        $pegawai->ID_Pegawai = $request->input('ID_Pegawai');
        $pegawai->Nama = $request->input('Nama');
        $pegawai->Alamat = $request->input('Alamat');
        $pegawai->Tanggal_Angkat = $request->input('Tanggal_Angkat');
        $pegawai->Jabatan = $request->input('Jabatan');
        $pegawai->Departemen = $request->input('Departemen');
        $pegawai->Gaji = $request->input('Gaji');
        $pegawai->Email = $request->input('Email');
        $pegawai->Nomor_Telepon = $request->input('Nomor_Telepon');

        $pegawai->save();

        return response()->json('Data Berhasil diupdate');

    }


    public function destroy($id)
    {
        // DELETE(id)
        // Delete by Id
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return response()->json('Data Berhasil dihapus');

    }
}
