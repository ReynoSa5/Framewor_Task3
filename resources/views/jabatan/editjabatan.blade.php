@extends('layout')

@section('judul-halaman')
    Halaman - Edit Absensi
@endsection

@section('judul')
    Edit Absensi
@endsection

@section('konten-utama')
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5 class="h5">Form Jabatan</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Masukkan Nama Jabatan" value="{{ $data->nama_jabatan }}">
                </div>
                <div class="mb-3">
                    <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                    <input type="number" step="0.01" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="Masukkan Gaji Pokok" value="{{ $data->gaji_pokok }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
