@extends('artikel/template/app')

@isset($tag_dipilih)
@section('title')
Tag : {{$tag_dipilih->nama}}
@endsection
@endisset

@isset($kategori_dipilih)
@section('title')
Kategori : {{$kategori_dipilih->nama}}
@endsection
@section('kategori', 'active')
@endisset

@isset($author_dipilih)
@section('title')
Author : {{$author_dipilih->name}}
@endsection
@section('author', 'active')
@endisset

@isset($home)
@section('title', 'Semua Post')
@section('home', 'active')
@endisset

@section('content')


@isset($rekomendasi)
@if ($rekomendasi->isNotEmpty())
<h2 class="my-4 text-center">Rekomendasi</h2>

<div class="row mt-4">
    @foreach ($rekomendasi as $row)
    <div class="col-md-4 mt-5">
        <div class="card shadow-sm">
            <a href="/{{$row->post->slug}}"><img src="/upload/post/{{$row->post->sampul}}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">{{$row->post->judul}}</h5>
                <p class="card-text"><small class="text-muted">{{$row->post->created_at->diffForHumans()}}</small></p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-4">{{$rekomendasi->links()}}</div>
@endif
@endisset

<h2 class="my-4 text-center">@yield('title')</h2>

<div class="d-flex justify-content-center">
    <form class="form-inline my-2 my-lg-0" method="GET" action="{{url()->full()}}">
        <input class="form-control mr-sm-2" type="search" placeholder="Search For ..." aria-label="Search" name="search" value="{{$search}}">
        <button class="btn btn-dark my-2 my-sm-0 mx-auto" type="submit" style="background-color: #123C69;">Search</button>
    </form>
    <br>
</div>

@if (session('search'))
<div class="row mt-4 justify-content-center text-center">
    <div class="col-md-6">
        <div class="alert alert-info" role="alert">
            {{session('search')}}
        </div>
    </div>
</div>
@else
<div class="row mt-4">
    @foreach ($artikel as $row)
    <div class="col-md-4 mt-5">
        <div class="card shadow-sm">
            <a href="/{{$row->slug}}"><img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">{{$row->judul}}</h5>
                <p class="card-text"><small class="text-muted">{{$row->created_at->diffForHumans()}}</small></p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-4">{{$artikel->links()}}</div>
@endif

@endsection