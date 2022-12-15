@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Categories Page</div>
  <div class="card-body">

      <a href="{{ url('/categories') }}" class="btn btn-secondary btn-sm" title="Back">
        <i class="fa fa-plus" aria-hidden="true"></i> < Back
      </a> </br> </br>
      
      <form action="{{ url('categories') }}" method="post" id="data">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Status</label></br>
        <select class="form-select" name="status" form="data">
          <option value="Active">Active</option>
          <option value="No Active">No Active</option>
        </select></br>
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