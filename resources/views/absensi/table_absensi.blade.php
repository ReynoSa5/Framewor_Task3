@extends('layout')

@section('judul-halaman')
    Halaman - Absensi
@endsection

@section('judul')
    Absensi
@endsection

@section('konten-utama')
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
           {{(session('pesan')) }}
        </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="h5 text-center">Table Absensi</h5>
            <a href="/absensi/tambah" class="btn btn-success">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID Karyawan</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Keluar </th>
                        <th scope="col">Edit </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $item['id_absensi'] }}</th>
                            <td>{{ $item['id_karyawan'] }}</td>
                            <td>{{ $item['jam_masuk'] }}</td>
                            <td>{{ $item['jam_masuk'] }}</td>
                            <td>
                                <a href="/absensi/edit/{{$item->id_absensi}}" class="btn btn-info btn-sm"><i class="fa-solid fa-edit"></i></a>
                                <a href="/absensi/hapus/{{$item->id_absensi}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
