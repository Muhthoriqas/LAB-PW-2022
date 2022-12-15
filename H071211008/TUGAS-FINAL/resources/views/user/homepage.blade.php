<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Homepage</title>

  <!-- Google Font: Source Sans Pro -->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    .info-box:hover{
      background-color: white;
      color: black;
      border: 1px solid #777;
      width: 300px;
    }

    </style>
  </head>
</head>
<body class="hold-transition dark-mode  layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class=" main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="image ">
        <div class="user-panel d-flex ">
          <img src="{{ asset('foto profil/wp2.jpg') }}" role="button" data-widget="pushmenu"  class="img-circle elevation-2" alt="User Image">
        </div>
        <li class="info nav-item ">
          <a href="#" class="nav-link" data-widget="pushmenu" role="button">Profil User</a>
        </li>
      </li>
    </ul>

    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="width:3000px">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('foto makanan/foto burger.webp') }}" alt="foto makanan" class="img-size-50 mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Burger
                  <span class="float-right text-sm text-danger"><i class="">23.000</i></span>
                </h3>
                <div class="wrap-num-product flex-w m-r-20 m-tb-10" style="border-radius: 3px;">
                  <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                    <i class="fs-16 zmdi zmdi-minus" style=" text-rendering: auto;"></i>
                  </div>
                  <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1"  style="width: 50px">
                  <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                    <i class="fs-16 zmdi zmdi-plus" style="text-rendering: auto;"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('foto makanan/fried-rice.jpg') }}" alt="foto makanan" class="img-size-50 mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nasi Goreng
                  <span class="float-right text-sm text-danger"><i class="">23.000</i></span>
                </h3>
                <div class="wrap-num-product flex-w m-r-20 m-tb-10" style="border-radius: 3px;">
                  <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                    <i class="fs-16 zmdi zmdi-minus" style=" text-rendering: auto;"></i>
                  </div>
                  <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1"  style="width: 50px">
                  <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                    <i class="fs-16 zmdi zmdi-plus" style="text-rendering: auto;"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('foto makanan/noodles.jpg') }}" alt="foto makanan" class="img-size-50 mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Mie Gorang
                  <span class="float-right text-sm text-danger"><i class="">23.000</i></span>
                </h3>
                <div class="wrap-num-product flex-w m-r-20 m-tb-10" style="border-radius: 3px;">
                  <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                    <i class="fs-16 zmdi zmdi-minus" style=" text-rendering: auto;"></i>
                  </div>
                  <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1"  style="width: 50px">
                  <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                    <i class="fs-16 zmdi zmdi-plus" style="text-rendering: auto;"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="/keranjangOrder" class="dropdown-item dropdown-footer">Keranjang Order</a>
        </div>
      </li>
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </li>

      <li class="nav-item">
        <a href="/homepage" class="nav-link">Contact</a>
      </li>  
    </ul>
  </nav>
  <!-- /.navbar -->

  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <section class="content">
      <!-- Brand Logo -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <p href="#" class="d-block"><h5>Profil</h5></p>
        </div>
      </div>

      <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition" style="margin:-8px">
        <div class="container-fluid">
          <div class="os-content col-md-12">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  src="{{ asset('foto profil/wp2.jpg') }}"
                  alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                <hr>
                <strong><i class="far fa-envelope mr-1"></i>Email</strong>
                <p class="text-muted">{{ Auth::user()->email }}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>
                <p class="text-muted">
                  Information system student from Hasanuddin University 
                </p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted">Makassar, Sulawesi Selatan</p>
                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <dic class=" os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrolbar-track">
              <div clas="os-scrollbar-handle" style="height: 51.3959%; transform: translate(0px, 0px);">
                ::before
              </div>
          </div>
        </div>
      </div>
    </section>
  </aside>

  <!-- jombotron -->
  <div class="content-wrapper">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <!-- <h1 style="position: absolute; text-align :center; font-size: 70px;"> Hello guys</h1> -->
        <div class="carousel-item active">
          <img src="{{ asset('foto makanan/bg1.jpg') }}" class="d-block w-100" alt="error" />
        </div>
        <div class="carousel-item">
          <img src="{{ asset('foto makanan/bg2.jpg') }}" class="d-block w-100" alt="ERROR" />
        </div>
        <div class="carousel-item">
          <img src="{{ asset('foto makanan/bg3.jpg') }}" class="d-block w-100" alt="ERROR" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <br>
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">List makanan</span>
                <a href="/listMakanan" class="small-box-footer" style="text-decoration:none;">More info <i class="fas fa-arrow-circle-right"></i></a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">List Category</span>
                <a href="/listCategory" class="small-box-footer text-decoration-none">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Keranjang Order</span>
                <a href="keranjangOrder" class="small-box-footer text-decoration-none">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tag"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">List Tag</span>
                  <a href="listTag" class="small-box-footer text-decoration-none">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-purple elevation-1"><i class="fas fa-edit"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Detail makanan</span>
                  <a href="/listMakanan" class="small-box-footer text-decoration-none">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-olive elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Payment</span>
                  <a href="/payment" class="small-box-footer text-decoration-none">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            
            <hr>

            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">New Product</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                  
                <div class=" card-body ">
                  <ul class="users-list col-md-12 container">
                    <li >
                      <img src="{{ asset('foto makanan/noodles.jpg') }}" alt="User Image" >
                      <a class="users-list-name" href="#">Mie Goreng</a>
                      <span class="users-list-date">Today</span>  
                    </li>
                    <li>
                      <img src="{{ asset('foto makanan/fried-chicken crispy.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Ayang Goreng Crisphy</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="{{ asset('foto makanan/fried-rice.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Nasi Goreng</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="{{ asset('foto makanan/foto makaron.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">macaron</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="/listMakanan">View All Food</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!--/.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product Favorite</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                  
                <div class=" card-body ">
                  <ul class="users-list col-md-12 ">
                    <li >
                      <img src="{{ asset('foto makanan/noodles.jpg') }}" alt="User Image" >
                      <a class="users-list-name" href="#">Mie Goreng</a>
                      <span class="users-list-date">Today</span>  
                    </li>
                    <li>
                      <img src="{{ asset('foto makanan/fried-chicken crispy.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Ayang Goreng Crisphy</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="{{ asset('foto makanan/fried-rice.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Nasi Goreng</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="{{ asset('foto makanan/foto makaron.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">macaron</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="/listMakanan">View All Food</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!--/.card -->
            </div>
            <!-- /.col -->

            <hr> 

            <div class="col-md-12">
              <div class="product">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Best selling product</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Product</th>
                          <th>Progress</th>
                          <th style="width: 40px">Label</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>Mie ayam</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" style="width: 80%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-success">80%</span></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>Batagor</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" style="width: 58%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-warning">58%</span></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>Ayam geprek</td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <div class="progress-bar bg-danger" style="width: 30%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-danger">30%</span></td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
</body>
</html>
