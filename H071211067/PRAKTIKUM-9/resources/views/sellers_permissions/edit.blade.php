@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Sellers Permissions Page</div>
  <div class="card-body">

      <a href="{{ url('/sellers_permissions') }}" class="btn btn-secondary btn-sm" title="Back">
        <i class="fa fa-plus" aria-hidden="true"></i> < Back
      </a> </br> </br>

      <form action="{{ url('sellers_permissions/' .$sellers_permissions->id) }}" method="post" id="data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$sellers_permissions->id}}" id="id" />
        <label>Seller</label></br>
        <select class="form-select" name="sellers_id" form="data">
        @foreach ($sellers as $seller)
          @if ($seller->id == $sellers_permissions->sellers_id) {
            <option value="{{ $seller->id }}" selected>{{ $seller->id }}. {{ $seller->name }}</option>
          } @else {
            <option value="{{ $seller->id }}">{{ $seller->id }}. {{ $seller->name }}</option>
          }
          @endif
        @endforeach
        </select>
        <label>Permission</label></br>
        <select class="form-select" name="permissions_id" form="data">
        @foreach ($permissions as $permission)
          @if ($permission->id == $sellers_permissions->permissions_id) {
            <option value="{{ $permission->id }}" selected>{{ $permission->id }}. {{ $permission->name }}</option>
          } @else {
            <option value="{{ $permission->id }}">{{ $permission->id }}. {{ $permission->name }}</option>
          }
          @endif
        @endforeach
        </select>  </br>
        <input type="submit" value="Update" class="btn btn-primary"></br>
    </form>
  
  </div>
</div>
@stop