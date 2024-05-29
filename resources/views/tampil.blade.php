@extends('template')
@section('main')
    <h1>Data Siswa</h1>
    <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Data</a>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration	 }}</th>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td><a href="{{ url('siswa/'. $item->id. '/edit') }}" class="btn btn-primary">Edit</a></td>
                    <td><a class="btn btn-danger">Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
