@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">

        <a href="{{ url('/products') }}" class="btn btn-secondary btn-sm" title="Back">
          <i class="fa fa-plus" aria-hidden="true"></i> < Back
        </a> </br> </br>

        <div class="card-body">
        <h5 class="Card-text">ID : {{ $products->id }}</h5>
        <p class="Card-text">Nama : {{ $products->name }}</p>
        <p class="card-text">Seller ID : {{ $products->seller_id }} {{ $sellers[$products->seller_id -1]->name }}</p>
        <p class="Card-text">Category ID :{{ $products->category_id }} {{ $categories[$products->category_id -1]->name }}</p>
        <p class="Card-text">Harga : {{ $products->price }}</p>
        <p class="Card-text">Status : {{ $products->status }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@endsection