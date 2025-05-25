<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return Karyawan::all();
    }
    public function tambah()
    {
        return view('r.karyawan');
    }

    public function simpan(Request $request)
    {
        $g = new Karyawan();

        $g->create($request->all());

        return back()->with('pesan', 'gagal woi');
    }
}
