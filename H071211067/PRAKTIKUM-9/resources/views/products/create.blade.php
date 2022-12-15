@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">

    <a href="{{ url('/products') }}" class="btn btn-secondary btn-sm" title="Back">
      <i class="fa fa-plus" aria-hidden="true"></i> < Back
    </a> </br> </br>

    <form action="{{ url('products') }}" method="post" id="data">
      {!! csrf_field() !!}
      <label>Nama</label></br>
      <input type="text" name="name" id="name" class="form-control"></br>
      <label>Seller</label></br>
      <select class="form-select" name="seller_id" form="data">
      @foreach ($sellers as $seller)
        <option value="{{ $seller->id }}">{{ $seller->id }}. {{ $seller->name }}</option>
      @endforeach
      </select>
      <label>Categories</label></br>
      <select class="form-select" name="category_id" form="data">
      @foreach ($categories as $categorie)
        <option value="{{ $categorie->id }}">{{ $categorie->id }}. {{ $categorie->name }}</option>
      @endforeach
      </select>
      <label>Price</label></br>
      <input type="number" name="price" id="price" class="form-control"></br>
      <label>Status</label></br>
      <select class="form-select" name="status" form="data">
          <option value="Ada">Ada</option>
          <option value="Tidak Ada">Tidak ada</option>
      </select> </br>
      <input type="submit" value="Save" class="btn btn-primary"></br>
    </form>

  </div>
</div>
@stop











