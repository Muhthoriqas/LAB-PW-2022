@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Seller Page</div>
  <div class="card-body">

      <a href="{{ url('/sellers') }}" class="btn btn-secondary btn-sm" title="Back">
        <i class="fa fa-plus" aria-hidden="true"></i> < Back
      </a> </br> </br>
      
      <form action="{{ url('sellers/' .$sellers->id) }}" method="post" id="data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$sellers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$sellers->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="Address" id="address" value="{{$sellers->address}}" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="Gender" id="gender" value="{{$sellers->gender}}" class="form-control"></br>
        <label>Nomor Hp</label></br>
        <input type="text" name="no_hp" id="no_hp" value="{{$sellers->no_hp}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$sellers->status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-primary"></br>
    </form>
  
  </div>
</div>
@stop