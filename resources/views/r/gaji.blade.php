@extends('layout')

@section('judul-halaman')
    Halaman - Gaji
@endsection

@section('judul')
    Form Gaji
@endsection

@section('konten-utama')
    <div class="card">
        <div class="card-header">
            <h5 class="h5">Form Tambah Gaji</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="id_karyawan" class="form-label">ID Karyawan</label>
                    <input type="text" class="form-control" id="id_karyawan" name="id_karyawan"
                        placeholder="Masukan ID Karyawan">
                </div>
                <div class="mb-3">
                    <label for="bulan" class="form-label">Bulan</label>
                    <input type="text" class="form-control" id="bulan" name="bulan" placeholder="Masukan Bulan">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun">
                </div>
                <div class="mb-3">
                    <label for="jumlah_absensi" class="form-label">Jumlah Absensi</label>
                    <input type="number" class="form-control" id="jumlah_absensi" name="jumlah_absensi"
                        placeholder="Masukan Jumlah Absensi">
                </div>
                <div class="mb-3">
                    <label for="tunjangan" class="form-label">Tunjangan</label>
                    <input type="number" class="form-control" id="tunjangan" name="tunjangan"
                        placeholder="Masukan Tunjangan">
                </div>
                <div class="mb-3">
                    <label for="total_gaji" class="form-label">Total Gaji</label>
                    <input type="number" class="form-control" id="total_gaji" name="total_gaji"
                        placeholder="Masukan Total Gaji">
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection


