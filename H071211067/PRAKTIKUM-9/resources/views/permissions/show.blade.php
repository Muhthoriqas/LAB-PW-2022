@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Permission Page</div>
  <div class="card-body">

        <a href="{{ url('/permissions') }}" class="btn btn-secondary btn-sm" title="Back">
          <i class="fa fa-plus" aria-hidden="true"></i> < Back
        </a> </br> </br>

        <div class="card-body">
        <h5 class="card-title">ID : {{ $permissions->id }}</h5>
        <p class="card-text">Nama : {{ $permissions->name }}</p>
        <p class="card-text">Deskripsi : {{ $permissions->description }}</p>
        <p class="card-text">Status : {{ $permissions->status }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@endsection