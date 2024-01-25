@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="{{ $name }}" width="300" class="img-thumbnail rounded-circle">
@endsection