@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Sellers Permissions Page</div>
  <div class="card-body">

        <a href="{{ url('/sellers_permissions') }}" class="btn btn-secondary btn-sm" title="Back">
          <i class="fa fa-plus" aria-hidden="true"></i> < Back
        </a> </br> </br>

        <div class="card-body">
        <!-- <h5 class="card-title">Nim : {{ $sellers_permissions->id }}</h5> -->
        <p class="card-text">Seller ID : {{ $sellers_permissions->sellers_id }} {{ $sellers[$sellers_permissions->sellers_id -1]->name }}</p>
        <p class="card-text">Permission ID : {{ $sellers_permissions->permissions_id }} {{ $permissions[$sellers_permissions->permissions_id -1]->name }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@endsection