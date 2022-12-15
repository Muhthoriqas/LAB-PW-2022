@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Seller Page</div>
  <div class="card-body">
    
    <a href="{{ url('/sellers') }}" class="btn btn-secondary btn-sm" title="Back">
      <i class="fa fa-plus" aria-hidden="true"></i> < Back
    </a> </br> </br>

        <div class="card-body">
        <h5 class="card-title">ID : {{ $sellers->id }}</h5>
        <p class="card-text">Nama : {{ $sellers->name }}</p>
        <p class="card-text">Alamat : {{ $sellers->address }}</p>
        <p class="card-text">Jenis Kelamin : {{ $sellers->gender }}</p>
        <p class="card-text">Nomor Hp : {{ $sellers->no_hp }}</p>
        <p class="card-text">Status : {{ $sellers->status }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@endsection