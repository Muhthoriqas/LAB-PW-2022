@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Sellers Permissions Page</div>
  <div class="card-body">

    <a href="{{ url('/sellers_permissions') }}" class="btn btn-secondary btn-sm" title="Back">
      <i class="fa fa-plus" aria-hidden="true"></i> < Back
    </a> </br> </br>

    <form action="{{ url('sellers_permissions') }}" method="post" id="data">
      {!! csrf_field() !!}
      <label>Seller ID</label></br>
      <select class="form-select" name="sellers_id" form="data">
      @foreach ($sellers as $seller)
        <option value="{{ $seller->id }}">{{ $seller->id }}. {{ $seller->name }}</option>
      @endforeach
      </select>
      <label>Permission ID</label></br>
      <select class="form-select" name="permissions_id" form="data">
      @foreach ($permissions as $permission)
        <option value="{{ $permission->id }}">{{ $permission->id }}. {{ $permission->name }}</option>
      @endforeach
      </select> </br>
      <input type="submit" value="Save" class="btn btn-primary"></br>
    </form>

  </div>
</div>
@stop











