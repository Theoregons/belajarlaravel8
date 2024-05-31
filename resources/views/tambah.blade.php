@extends('template')
@section('main')
    <h2>Tambah Siswa</h2>
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIS</label>
                <input type="text" class="form-control @error('nis') is-invalid @enderror" id="exampleFormControlInput1" name="nis" placeholder="NIS" value="{{ old('nis') }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" name="nama" placeholder="Nama" value="{{ old('nama') }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlInput1" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
            </div>
            <select class="form-select" aria-label="Default select example" name="sekolah_id">
                @foreach ($sekolah as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-4" name="submit">Simpan</button>
        </form>
@endsection
