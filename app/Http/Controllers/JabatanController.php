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
        // $request->validate([
        //     "id_karyawan" => "required|integer",
        //     "tanggal" => "required|date",
        //     "jam_masuk" => "required|date_format:H:i",
        //     "jam_keluar" => "required|date_format:H:i"
        // ], [
        //     "id_karyawan.required" => "ID karyawan tidak boleh kosong",
        //     "id_karyawan.integer" => "ID karyawan harus angka",

        //     "tanggal.required" => "Tanggal tidak boleh kosong",
        //     "tanggal.date" => "Format tanggal tidak sesuai",

        //     "jam_masuk.required" => "Jam masuk tidak boleh kosong",
        //     "jam_masuk.date_format" => "Format jam masuk harus HH:MM",

        //     "jam_keluar.required" => "Jam keluar tidak boleh kosong",
        //     "jam_keluar.date_format" => "Format jam keluar harus HH:MM",
        // ]);

        Jabatan::create($request->all());

        return redirect('/jabatan')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($edit)
    {
        return view('jabatan.editjabatan', [
            'data' => Jabatan::find($edit)
        ]);
    }
}
