<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Food Center</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Profil Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="" type="button"  class="nav-link" type="button" data-toggle="modal" data-target="#modal-secondary">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Tambah Data
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



<div class="content-wrapper">
<br>
<div class="container">
<div id ="favorite">
        <h1 class="text-center">Food Center</h1>
            <!-- ./row -->
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-warning card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-all-tab" data-toggle="pill" href="#custom-tabs-one-all" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">All</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Favorite</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="true">Price</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="true">order</a>
                  </li>
                </ul>
              </div>

         
              <!-- /.card-header -->
              <div class="card-body">
              <div class="tab-content" id="custom-tabs-one-tabContent">
                <!-- All -->
              <div class="tab-pane fade show active" id="custom-tabs-one-all" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th style="width: 60px">Favorite count</th>
                      <th style="width: 60px">order count</th>
                      <th>Price</th>
                      <th style="width:20%">Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Burger</td>
                      <td>Burger dengan beef patties yang tebal dan saus keju</td>
                      <td><span class="badge bg-danger fas fa-star">4,8</span></td>
                      <td>256 terjual</td>
                      <td>Rp 23.000</td>
                      <td><img src="{{ asset('foto makanan/foto burger.webp') }}"  class="card-img-top" alt="..."></td>
                      <td>
                          <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                          <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Mie Goreng</td>
                      <td>Mie goreng pedas manis</td>
                      <td><span class="badge bg-danger fas fa-star">4,9</span></td>
                      <td>305 terjual</td>
                      <td>Rp 18.000</td>
                      <td><img src="{{ asset('foto makanan/noodles.jpg') }}"  class="card-img-top" alt="..."></td>
                      <td>
                          <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                          <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Pizza</td>
                      <td>Ukuran medium dengan toping keju mozarella</td>
                      <td><span class="badge bg-danger fas fa-star">4,7</span></td>
                      <td>146 terjual</td>
                      <td>Rp 56.000</td>
                      <td><img src="{{ asset('foto makanan/foto pizza.jpg') }}"class="card-img-top" alt="..."></td>
                      <td>
                          <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                          <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                       </td>
                  </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
             </div>

              <!-- Favorite -->
              <div class="tab-pane fade " id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th style="width: 60px">Favorite count</th>
                        <th style="width: 60px">order count</th>
                        <th>Price</th>
                        <th style="width:20%">Gambar</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Mie Goreng</td>
                        <td>Mie goreng pedas manis</td>
                        <td><span class="badge bg-danger fas fa-star">4,9</span></td>
                        <td>305 terjual</td>
                        <td>Rp 18.000</td>
                        <td><img src="{{ asset('foto makanan/noodles.jpg') }}"  class="card-img-top" alt="..."></td>
                        <td>
                          <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                          <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Burger</td>
                        <td>Burger dengan beef patties yang tebal dan saus keju</td>
                        <td><span class="badge bg-danger fas fa-star">4,8</span></td>
                        <td>256 terjual</td>
                        <td>Rp 23.000</td>
                        <td><img src="{{ asset('foto makanan/foto burger.webp') }}"  class="card-img-top" alt="..."></td>
                        <td>
                          <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                          <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Pizza</td>
                        <td>Ukuran medium dengan toping keju mozarella</td>
                        <td><span class="badge bg-danger fas fa-star">4,7</span></td>
                        <td>146 terjual</td>
                        <td>Rp 56.000</td>
                        <td><img src="{{ asset('foto makanan/foto pizza.jpg') }}"class="card-img-top" alt="..."></td>
                        <td>
                          <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                          <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
            </div>

              <!-- price -->
              <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th style="width: 60px">Favorite count</th>
                      <th style="width: 60px">order count</th>
                      <th>Price</th>
                      <th style="width:20%">Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Mie Goreng</td>
                      <td>Mie goreng pedas manis</td>
                      <td><span class="badge bg-danger fas fa-star">4,9</span></td>
                      <td>305 terjual</td>
                      <td>Rp 18.000</td>
                      <td><img src="{{ asset('foto makanan/noodles.jpg') }}"  class="card-img-top" alt="..."></td>
                      <td>
                        <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                        <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Burger</td>
                      <td>Burger dengan beef patties yang tebal dan saus keju</td>
                      <td><span class="badge bg-danger fas fa-star">4,8</span></td>
                      <td>256 terjual</td>
                      <td>Rp 23.000</td>
                      <td><img src="{{ asset('foto makanan/foto burger.webp') }}"  class="card-img-top" alt="..."></td>
                      <td>
                        <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                        <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Pizza</td>
                      <td>Ukuran medium dengan toping keju mozarella</td>
                      <td><span class="badge bg-danger fas fa-star">4,7</span></td>
                      <td>146 terjual</td>
                      <td>Rp 56.000</td>
                      <td><img src="{{ asset('foto makanan/foto pizza.jpg') }}"class="card-img-top" alt="..."></td>
                      <td>
                        <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                        <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>


            <!-- order -->
            <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                  <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th style="width: 60px">Favorite count</th>
                      <th style="width: 60px">order count</th>
                      <th>Price</th>
                      <th style="width:20%">Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2.</td>
                      <td>Mie Goreng</td>
                      <td>Mie goreng pedas manis</td>
                      <td><span class="badge bg-danger fas fa-star">4,9</span></td>
                      <td>305 terjual</td>
                      <td>Rp 518000</td>
                      <td><img src="{{ asset('foto makanan/noodles.jpg') }}"  class="card-img-top" alt="..."></td>
                      <td>
                        <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                        <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Burger</td>
                      <td>Burger dengan beef patties yang tebal dan saus keju</td>
                      <td><span class="badge bg-danger fas fa-star">4,8</span></td>
                      <td>256 terjual</td>
                      <td>Rp 23.000</td>
                      <td><img src="{{ asset('foto makanan/foto burger.webp') }}"  class="card-img-top" alt="..."></td>
                      <td>
                        <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                        <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Pizza</td>
                      <td>Ukuran medium dengan toping keju mozarella</td>
                      <td><span class="badge bg-danger fas fa-star">4,7</span></td>
                      <td>146 terjual</td>
                      <td>Rp 56.000</td>
                      <td><img src="{{ asset('foto makanan/foto pizza.jpg') }}"class="card-img-top" alt="..."></td>
                      <td>
                        <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Edit</a>
                        <a href="#" type="button" class="btn btn-block btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
        

            </div>
          </div>
</div>
</div>
</div>
  


<!-- Modal Tambah Data-->
<div class="modal fade" id="modal-secondary">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Makanan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
            <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas "></i>Nama</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far "></i>Deskripsi</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far"></i>Price</label>
                    <input type="text" class="form-control is-primary" id="inputError" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far"></i>Category</label>
                  <select class="form-control" id="category" name="category">
                    <option value="">-Category-</option> 
                  </select>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far"></i>Tag</label>
                  <select class="form-control" id="category" name="category">
                    <option value="">-Tag-</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far"></i>Image</label>
                    <input type="file" class="form-control " id="inputError" placeholder="Enter ...">
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-secondary">tambah data</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



  <!-- Modal Edit Data-->
<div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data Makanan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
            <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas "></i>Nama</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far "></i>Deskripsi</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                    <textarea id="summernote">
                      Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far"></i>Price</label>
                    <input type="text" class="form-control is-primary" id="inputError" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                  <label class="col-form-label" for="inputWarning"><i class="far"></i>Category</label>
                  <select class="form-control" id="category" name="category">
                    <option value="">-Category-</option> 
                  </select>
                  </div>
                  <div class="form-group">
                  <label class="col-form-label" for="inputWarning"><i class="far"></i>Tag</label>
                  <select class="form-control" id="category" name="category">
                    <option value="">-Tag-</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far"></i>Image</label>
                    <input type="file" class="form-control " id="inputError" placeholder="Enter ...">
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">tambah data</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- REQUIRED SCRIPTS -->
<!-- Summernote -->
<script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('template/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template/dist/js/pages/dashboard2.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
  </script>
</body>
</html>