@extends('layouts/main')

@section('container')
    <h1>Post Categories</h1>

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x400?{{ $category->name }}"
                            class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h1 class="card-title text-center flex-fill">{{ $category->name }}</h1>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection