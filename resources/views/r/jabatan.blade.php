@extends('layout')

@section('judul-halaman')
    Halaman - Jabatan
@endsection

@section('judul')
    Form Jabatan
@endsection

@section('konten-utama')
    <div class="card">
        <div class="card-header">
            <h5 class="h5">Form Jabatan</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Masukkan Nama Jabatan">
                </div>
                <div class="mb-3">
                    <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                    <input type="number" step="0.01" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="Masukkan Gaji Pokok">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
