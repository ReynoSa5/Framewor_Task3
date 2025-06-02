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
            <h5>Edit Data Absensi</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_karyawan">ID Karyawan</label>
                    <input type="number" name="id_karyawan" id="id_karyawan" class="form-control"
                        value="{{ old('id_karyawan', $data->id_karyawan) }}">
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control"
                        value="{{ old('tanggal', $data->tanggal) }}">
                </div>

                <div class="form-group">
                    <label for="jam_masuk">Jam Masuk</label>
                    <input type="time" name="jam_masuk" id="jam_masuk" class="form-control"
                        value="{{ old('jam_masuk', $data->jam_masuk) }}">
                </div>

                <div class="form-group">
                    <label for="jam_keluar">Jam Keluar</label>
                    <input type="time" name="jam_keluar" id="jam_keluar" class="form-control"
                        value="{{ old('jam_keluar', $data->jam_keluar) }}">
                </div>

                <div class="mt-3 d-flex justify-content-between">
                    <a href="/absensi" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
