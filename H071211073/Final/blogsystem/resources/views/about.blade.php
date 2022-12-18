@extends('layouts/main')

@section('container')
    <h1>Description about this page</h1>
    <h3>{{ $name }}</h3>
    <p>ooga booga</p>
    <img src="img/{{ $image }}" alt="protrait of roko">
@endsection