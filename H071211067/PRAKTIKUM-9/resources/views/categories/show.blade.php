@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Categories Page</div>
  <div class="card-body">

        <a href="{{ url('/categories') }}" class="btn btn-secondary btn-sm" title="Back">
          <i class="fa fa-plus" aria-hidden="true"></i> < Back
        </a> </br> </br>

        <div class="card-body">
        <h5 class="card-title">ID : {{ $categories->id }}</h5>
        <p class="card-text">Nama : {{ $categories->name }}</p>
        <p class="card-text">Status : {{ $categories->status }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@endsection