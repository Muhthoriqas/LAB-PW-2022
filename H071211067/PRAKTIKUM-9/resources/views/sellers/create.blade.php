@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Seller Page</div>
  <div class="card-body">

      <a href="{{ url('/sellers') }}" class="btn btn-secondary btn-sm" title="Back">
        <i class="fa fa-plus" aria-hidden="true"></i> < Back
      </a> </br> </br>
      
      <form action="{{ url('sellers') }}" method="post" id="data">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="Address" id="address" class="form-control"></br>
        <label>Jenis Kelamin</label></br>
        <input type="text" name="Gender" id="gender" class="form-control"></br>
        <label>Nomor HP</label></br>
        <input type="text" name="no_hp" id="no_hp" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-primary"></br>
    </form>
  
  </div>
</div>
@stop

<!-- 
name
address 
gender
no_hp
status 
-->