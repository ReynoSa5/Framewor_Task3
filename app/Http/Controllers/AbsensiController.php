<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index_absen()
    {
        $a = new absensi();

        return view('absensi.table_absensi', [
            'data'=>$a->all()
        ]);
    }

    public function tambah_absen()
    {
        return view('absensi.absensi');
    }

    public function simpan_absen(Request $request)
    {
        $request->validate([
            "id_karyawan" => "required|integer",
            "tanggal" => "required|date",
            "jam_masuk" => "required|date_format:H:i",
            "jam_keluar" => "required|date_format:H:i"
        ], [
            "id_karyawan.required" => "ID karyawan tidak boleh kosong",
            "id_karyawan.integer" => "ID karyawan harus angka",

            "tanggal.required" => "Tanggal tidak boleh kosong",
            "tanggal.date" => "Format tanggal tidak sesuai",

            "jam_masuk.required" => "Jam masuk tidak boleh kosong",
            "jam_masuk.date_format" => "Format jam masuk harus HH:MM",

            "jam_keluar.required" => "Jam keluar tidak boleh kosong",
            "jam_keluar.date_format" => "Format jam keluar harus HH:MM",
        ]);

        Absensi::create($request->all());

        return redirect('/absensi')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($edit)
    {
        return view('absensi.editabsen', [
            'data' => Absensi::find($edit)
        ]);
    }

    public function update(Request $request, $edit)
    {
        $request->validate([
            "id_karyawan" => "required|integer",
            "tanggal" => "required|date",
            "jam_masuk" => "required|date_format:H:i",
            "jam_keluar" => "required|date_format:H:i"
        ], [
            "id_karyawan.required" => "ID karyawan tidak boleh kosong",
            "id_karyawan.integer" => "ID karyawan harus angka",

            "tanggal.required" => "Tanggal tidak boleh kosong",
            "tanggal.date" => "Format tanggal tidak valid",

            "jam_masuk.required" => "Jam masuk tidak boleh kosong",
            "jam_masuk.date_format" => "Format jam masuk harus HH:MM",

            "jam_keluar.required" => "Jam keluar tidak boleh kosong",
            "jam_keluar.date_format" => "Format jam keluar harus HH:MM",
        ]);

        Absensi::find($edit)->update($request->all());

        return redirect('/absensi')->with('pesan', 'Data absensi berhasil diupdate');
    }

    public function hapus($edit)
    {
         $r = new Absensi();

        $r->find($edit)->delete();
        
        return redirect('/absensi')->with('pesan', 'Data absensi berhasil dihapus');
    }
}
