@extends('template')
@section('main')
    <h2>Tambah Siswa</h2>
        <form action="{{ route('siswa.update', $data->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIS</label>
                <input type="text" class="form-control @error('nis') is-invalid @enderror" id="exampleFormControlInput1" name="nis" placeholder="NIS" value="{{ $data->nis }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" name="nama" placeholder="Nama" value="{{ $data->nama }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlInput1" name="alamat" placeholder="Alamat" value="{{ $data->alamat }}">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </form>
@endsection
