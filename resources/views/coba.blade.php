@extends('template')
@section('main')
    <h1>Ini Halaman Coba</h1>

    @for($i=1; $i <= 10 ; $i++)
        @if ($i % 2)
            <h1>Ini perulangan menggunakan blade</h1>
        @endif
    @endfor

    @php
        $no = 5;
        echo $no;
    @endphp

    <img src="{{ asset('img/foto.webp') }}" width="400px">
@endsection
