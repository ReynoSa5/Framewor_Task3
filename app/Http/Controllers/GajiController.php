<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji;

class GajiController extends Controller
{
    public function index()
    {
        return Gaji::all();
    }
    public function tambah()
    {
        return view('r.gaji');
    }

    public function simpan(Request $request)
    {
        $g = new Gaji();

    $g->create($request->all());

    return back()->with('pesan','gagal woi');
    }
}
