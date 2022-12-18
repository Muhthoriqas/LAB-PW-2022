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
    <link rel="stylesheet" href="/dashboard.css">
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
                            <a class="nav-link" aria-current="page" href="#">
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
          <h1 class="h2">Data Mahasiswa</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
        </div>
        
        <div class="row">
          <div class="grid-courses col-md-12">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="items items-courses items-sessions">
                  <br>
                  <div class="p-3 border bg-opacity-20 rounded">
                    <h5 class="card-title text-center">{{ $details->id }}</h5>
                    <p class="block-info">Nama: {{ $details->nama }}</p>
                    <p class="block-info">NIM: {{ $details->username }}</p>
                    <a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editmhs">Edit</a>
                    <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemhs">Delete</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="modal fade" id="editmhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Mahasiswa</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="/updatemhs/{{ $details->id }}" method="post">
                    @csrf
                    <div class="form-floating mb-4">
                      <input name="nama" type="text" id="form3Example3" class="form-control @error('nama') is-invalid @enderror" value="{{ $details->nama }}"/>
                      <label class="form-label" for="form3Example3">Nama </label>
                    </div> 
                    <div class="form-floating mb-4">
                      <input name="nim" type="text" id="form3Example3" class="form-control @error('nim') is-invalid @enderror" value="{{ $details->nim }}"/>
                      <label class="form-label" for="form3Example3">NIM </label>
                    </div> 
                    <div class="form-floating mb-4">
                      <input name="password" type="text" id="form3Example3" class="form-control @error('password') is-invalid @enderror" value="{{ $details->password }}"/>
                      <label class="form-label" for="form3Example3">Password </label>
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

        <div class="modal fade" id="deletemhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Akun Mahasiswa</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="/deletemhs/{{ $details->id }}" method="get">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>  --}}
</body>

</html>
