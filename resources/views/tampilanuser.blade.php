@extends('template')
@section('main')
    <h1>Hello {{ Auth::user()->name }}</h1>
    <h2>Ini Halaman user</h2>
@endsection
