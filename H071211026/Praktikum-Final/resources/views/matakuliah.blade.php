<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">ALOKIS</a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                {{-- <a class="nav-link px-3" href="/logout">Sign out</a> --}}
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="nav-link px-3 bg-dark">Logout</button>
                  </form>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/dashboard">
                                <span data-feather="home"></span>
                                Home
                            </a>
                        </li>
                        @can('mhs')
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/listmatkul">
                                <span data-feather="home"></span>
                                Daftar Mata Kuliah
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/mhsmatkul">
                                <span data-feather="home"></span>
                                Pencarian Mata Kuliah
                            </a>
                        </li>
                        @endcan
                    </ul>

                    @can('admin')
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-muted">
                        <span>Admin</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/matakuliah">
                                <span data-feather="file-text"></span>
                                Matakuliah
                            </a>
                        </li>
                    </ul>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/akun">
                                <span data-feather="file-text"></span>
                                Akun
                            </a>
                        </li>
                    </ul>
                    @endcan

                    @can('dosen')
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-muted">
                        <span>Dosen</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/matakuliah">
                                <span data-feather="file-text"></span>
                                Matakuliah
                            </a>
                        </li>
                    </ul>
                    @endcan
                </div>
            </nav>
        </div>
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Daftar Matakuliah</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
        </div>
        
        @can('dosen')
        <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahmatakuliah">Tambah +</a>
        @endcan

        <div class="row">
            <div class="grid-courses col-md-12">
              <div class="row">
                @foreach($matakuliah as $item)
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="items items-courses items-sessions">
                    <br>
                    <div class="p-3 border bg-opacity-20 rounded">
                      <h5 class="title">{{ $item->nama }}</h5>
                      <a href="/matakuliah/{{ $item->id }}" class="btn btn-secondary">Lihat Kelas</a>
                      
                      @can('dosen')
                      <a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editmatakuliah{{ $item->id }}">Edit</a>
                      <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletematakuliah{{ $item->id }}">Delete</a>
                      @endcan
                      
                      <div class="modal fade" id="editmatakuliah{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Matakuliah</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="/updatematakuliah/{{ $item->id }}" method="post">
                                @csrf
                                <div class="form-floating mb-4">
                                  <input name="nama" type="text" id="form3Example3" class="form-control @error('nama') is-invalid @enderror" value="{{ $item->nama }}"/>
                                  <label class="form-label" for="form3Example3">Nama </label>
                                </div> 
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                  Submit
                                </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
            
                    <div class="modal fade" id="deletematakuliah{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Matakuliah</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="/deletematakuliah/{{ $item->id }}" method="get">
                                @csrf
                                <h6>Yakin ingin menghapus akun?</h6>
                                <br>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                  Submit
                                </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

        <div class="modal fade" id="tambahmatakuliah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Matakuliah</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/tambahmatakuliah" method="post">  
                        @csrf
                        <div class="form-floating mb-4">
                          <input name="nama" type="text" id="form3Example3" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}"/>
                          <label class="form-label" for="form3Example3">Nama </label>
                          @error('nama')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div> 
        
                        <!-- Submit button -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Sumbit</button>
                          </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script> --}}
</body>

</html>
