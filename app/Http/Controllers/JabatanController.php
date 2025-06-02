<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $j = new Jabatan();

        return view('jabatan.table_jabatan', [
            'data'=>$j->all()
        ]);
    }
    public function tambah()
    {
        return view('jabatan.jabatan');
    }

    public function simpan(Request $request)
    {
         $request->validate([
        "gaji_pokok" => "required|numeric|min:1000000"
    ], [
        "gaji_pokok.required" => "Gaji pokok tidak boleh kosong",
        "gaji_pokok.numeric" => "Gaji pokok harus berupa angka",
        "gaji_pokok.min" => "Gaji pokok minimal Rp1.000.000",
    ]);

        Jabatan::create($request->all());

        return redirect('/jabatan')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($edit)
    {
        return view('jabatan.editjabatan', [
            'data' => Jabatan::find($edit)
        ]);
    }

    public function update(Request $request, $edit)
    {
        $request->validate([
        "gaji_pokok" => "required|numeric|min:1000000"
    ], [
        "gaji_pokok.required" => "Gaji pokok tidak boleh kosong",
        "gaji_pokok.numeric" => "Gaji pokok harus berupa angka",
        "gaji_pokok.min" => "Gaji pokok minimal Rp1.000.000",
    ]);

        Jabatan::find($edit)->update($request->all());

        return redirect('/jabatan')->with('pesan', 'Data absensi berhasil diupdate');
    }

    public function hapus($edit)
    {
         $r = new Jabatan();

        $r->find($edit)->delete();
        
        return redirect('/jabatan')->with('pesan', 'Data absensi berhasil dihapus');
    }
}
