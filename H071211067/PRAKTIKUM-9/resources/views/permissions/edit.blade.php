@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Permission Page</div>
  <div class="card-body">

      <a href="{{ url('/permissions') }}" class="btn btn-secondary btn-sm" title="Back">
        <i class="fa fa-plus" aria-hidden="true"></i> < Back
      </a> </br> </br>
      
      <form action="{{ url('permissions/' .$permissions->id) }}" method="post" id="data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$permissions->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$permissions->name}}" class="form-control"></br>
        <label>Deskripsi</label></br>
        <input type="text" name="description" id="description" value="{{$permissions->description}}" class="form-control"></br>
        <label>Status</label></br>
        <select class="form-select" name="status" form="data">
          <option value="Available">Available</option>
          <option value="Unavailable">Unavailable</option>
        </select> </br>
        <input type="submit" value="Update" class="btn btn-primary"></br>
    </form>
  
  </div>
</div>
@stop