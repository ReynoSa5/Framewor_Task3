<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index_absen()
    {
        return Absensi::all();
    }

    public function tambah_absen()
    {
        return view('r.absensi');
    }

    public function simpan_absen(Request $request)
    {
        $g = new Absensi();

        
    $g->create($request->all());

    return back()->with('pesan','gagal woi');
    }
}
