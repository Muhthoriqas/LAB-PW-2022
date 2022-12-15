@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h3>{{ $post->title }}</h3>

                <a href="/dashboard/posts" class="btn btn-success my-3">Back to all my post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-3">Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf 
                    <button class="btn btn-danger" onclick="return confirm('Are you Sure? :(')">
                        <span data-feather="x-circle"></span> Delete
                    </button>
                </form>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
                class="img-fluid" 
                alt="{{ $post->category->name }}">

                <article class="my-3">
                    {!! $post->body !!}
                </article>
                
            </div>
        </div>
    </div> 

@endsection