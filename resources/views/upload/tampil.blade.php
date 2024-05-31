@extends('template')
@section('main')
    <h1>Upload File</h1>
    <form class="d-flex align-items-center" action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="form-control" type="file" name="image" id="formFile">
        <button class="btn btn-success h-100">Simpan</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ 'storage/'.$item->image }}" width="150" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
