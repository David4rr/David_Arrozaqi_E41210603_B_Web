{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}}</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Home Page</h1>
            <p class="lead">This is the Home Page</p>
        </div>
    </div>
</body>
</html> --}}

{{-- Extends menghubungkan view ke view master --}}
@extends('layouts.app')

{{-- Section mendefinisikan sebuah bagian (section) dari isi halaman web --}}
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Home Page</h1>
        <p class="lead"> This is the Home Page</p>
    </div>
    <p>Nama : {{ $nama }}</p>
    <p>Mata Pelajaran : </p>
    <ul>
        @foreach ($pelajaran as $p)
        <li>{{ $p }}</li>
        @endforeach
    </ul>
</div>
    
@endsection