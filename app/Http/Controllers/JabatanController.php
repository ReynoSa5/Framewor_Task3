<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        return Jabatan::all();
    }
    public function tambah()
    {
        return view('r.jabatan');
    }

    public function simpan(Request $request)
    {
        $g = new Jabatan();

    $g->create($request->all());

    return back()->with('pesan','gagal woi');
    }
}
