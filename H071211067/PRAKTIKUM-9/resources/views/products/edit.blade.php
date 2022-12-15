@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">

      <a href="{{ url('/products') }}" class="btn btn-secondary btn-sm" title="Back">
        <i class="fa fa-plus" aria-hidden="true"></i> < Back
      </a> </br> </br>

      <form action="{{ url('products/' .$products->id) }}" method="post" id="data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{ $products->name }}"></br>
        <label> Sellers</label></br>
        <select class="form-select" name="seller_id" form="data">
        @foreach ($sellers as $seller)
          @if ($seller->id == $products->seller_id) {
            <option value="{{ $seller->id }}" selected>{{ $seller->id }}. {{ $seller->name }}</option>
          } @else {
            <option value="{{ $seller->id }}">{{ $seller->id }}. {{ $seller->name }}</option>
          }
          @endif
        @endforeach
        </select>
        <label>Categories</label></br>
        <select class="form-select" name="category_id" form="data">
        @foreach ($categories as $categories)
          @if ($categories->id == $products->category_id) {
            <option value="{{ $categories->id }}" selected>{{ $categories->id }}. {{ $categories->name }}</option>
          } @else {
            <option value="{{ $categories->id }}">{{ $categories->id }}. {{ $categories->name }}</option>
          }
          @endif
        @endforeach
        </select>
        <label>Price</label></br>
        <input type="number" name="price" id="price" class="form-control" value="{{ $products->price }}"></br>
        <label>Status</label></br>
        <select class="form-select" name="status" form="data">
          <option value="Ada">Ada</option>
          <option value="Tidak Ada">Tidak ada</option>
        </select> </br>
        <input type="submit" value="Update" class="btn btn-primary"></br>
    </form>
  
  </div>
</div>
@stop