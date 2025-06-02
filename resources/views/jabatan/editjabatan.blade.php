@extends('layout')

@section('judul-halaman', 'Halaman - Edit Jabatan')
@section('judul', 'Edit Jabatan')

@section('konten-utama')
    <div class="card">
        <div class="card-header">
            <h5 class="h5">Form Edit Jabatan</h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="{{ old('nama_jabatan', $data->nama_jabatan) }}">
                </div>
                <div class="mb-3">
                    <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                    <input type="number" step="0.01" class="form-control" id="gaji_pokok" name="gaji_pokok" value="{{ old('gaji_pokok', $data->gaji_pokok) }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
