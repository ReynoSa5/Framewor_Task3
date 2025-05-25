@extends('layout')

@section('judul-halaman')
    Halaman - Absensi
@endsection

@section('judul')
    Absensi
@endsection

@section('konten-utama')
    <div class="card">
        <div class="card-header">
            <h5 class="h5">Form Absensi</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal">
                </div>
                <div class="mb-3">
                    <label for="id_karyawan" class="form-label">ID Karyawan</label>
                    <input type="number" class="form-control" id="id_karyawan" name="id_karyawan"
                        placeholder="Masukan ID Karyawan">
                </div>
                <div class="mb-3">
                    <label for="jam_masuk" class="form-label">Jam Masuk</label>
                    <input type="time" class="form-control" id="jam_masuk" name="jam_masuk"
                        placeholder="Masukan Jam Masuk">
                </div>
                <div class="mb-3">
                    <label for="jam_keluar" class="form-label">Jam Keluar</label>
                    <input type="time" class="form-control" id="jam_keluar" name="jam_keluar"
                        placeholder="Masukan Jam Keluar">
                </div>
        </div>
        <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </div>
@endsection
