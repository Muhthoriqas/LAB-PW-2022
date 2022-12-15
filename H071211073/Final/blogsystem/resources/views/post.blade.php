
@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h3 class="mb-3">{{ $post->title }}</h3>
                <h5>By : 
                    <a href="/posts?user={{ $post->user->username }}">{{ $post->user->name }}</a> 
                    in 
                    <a href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }}</a>
                </h5>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
                class="img-fluid" 
                alt="{{ $post->category->name }}">

                <article class="my-3">
                    {!! $post->body !!}
                </article>
                
                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>    

 

@endsection