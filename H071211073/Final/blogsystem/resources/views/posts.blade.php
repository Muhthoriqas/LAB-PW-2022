@extends('layouts/main')

@section('container')

    <div class="row justify-content-between mb-3">
        <div class="col-md-6">
            <h1>{{ $title }}</h1>
        </div>
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" 
                            placeholder="Search"
                            name="search"
                            value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" 
                class="card-img-top" 
                alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>

            <h5>By : 
            <a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> 
            in 
            <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }}</a>
            </h5>

            <p class="card-text">{{ $posts[0]->excerpt }}..
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">Read more</a>
            </p>

            <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2 text-light">
                        <a href="/posts?category={{ $post->category->slug }}" class="text-light text-decoration-none">{{ $post->category->name }}</a>
                    </div>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" 
                            class="card-img-top" 
                            alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <h5>By : 
                            <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> 
                        </h5>
                        <p class="card-text">{{ $post->excerpt }}.. 
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach    
        </div>
    </div>

    @else
    <p class="text-center fs-4">No Post Found</p>

    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
    

@endsection