@extends('layout')

@section('judul-halaman')
    Halaman - Jabatan
@endsection

@section('judul')
    Jabatan
@endsection

@section('konten-utama')
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
           {{(session('pesan')) }}
        </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="h5 text-center">Table Jabatan</h5>
            <a href="/jabatan/tambah" class="btn btn-success">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Gaji Pokok</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $item['id_jabatan'] }}</th>
                            <td>{{ $item['nama_jabatan'] }}</td>
                            <td>{{ 'Rp ' . number_format($item['gaji_pokok'], 0, ',', '.') }}</td>
                            <td>
                                <a href="/jabatan/edit/{{$item->id_jabatan}}" class="btn btn-info btn-sm"><i class="fa-solid fa-edit"></i></a>
                                <a href="/jabatan/hapus/{{$item->id_jabatan}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
