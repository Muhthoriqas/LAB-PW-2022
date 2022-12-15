<!doctype html>
<html lang="en">
{{-- head --}}
@include('sb-admin/head')

<body id="page-top">
  {{-- navbar --}}
  @include('artikel/template/navbar')

  @isset($banner)
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach ($banner as $row)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="{{($loop->first) ? 'active' : ''}}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach ($banner as $row)
      <div class="carousel-item {{($loop->first) ? 'active' : ''}}">
        <a href="/artikel-banner/{{$row->slug}}"><img src="/upload/banner/{{$row->sampul}}" height="600xp" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h3>{{$row->judul}}</h3>
        </div>
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  @endisset


  <div class="container">
    @yield('content')
  </div>

  <!-- Footer -->
  @include('sb-admin/footer')

  <!-- Scroll to Top Button-->
  @include('sb-admin/button-topbar')

  {{-- logout --}}
  @include('sb-admin/logout-modal')

  {{-- javascript --}}
  @include('sb-admin/javascript')
</body>

</html>