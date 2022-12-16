<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keranjang Pesanan</title>

  <!-- Google Font: Source Sans Pro -->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition dark-mode sidebar-mini-fixed layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class=" main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="image ">
      <div class="user-panel d-flex ">
            <img src="{{ asset('foto profil/wp2.jpg') }}" role="button"data-widget="pushmenu"  class="img-circle elevation-2" alt="User Image">
      </div>
       <li class="info nav-item ">
          <a href="#" class="nav-link" data-widget="pushmenu" role="button">Profil User</a>
      </li>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/homepage" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/homepage" class="nav-link">Login Admin</a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <section class="content main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="info">
          <a href="#" class="d-block"><h5>{{ Auth::user()->name }}</h5></a>
        </div>
      </div>

    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"
    style="margin:-8px">

      <div class="container-fluid">
  
          <div class="os-content col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary  card-outline">
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
            <div class="card card-primary ">
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

  


<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

   <br>
  
   <div id ="favorite">
            <!-- ./row -->
        <div class="row">
          <div class="col-12 col-sm-12">

            <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Keranjang Pesanan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <center><th style="width:20%">Gambar</th>
                    <th >Nama</th>
                    <th style="width:5px">Banyak</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th  style="width:20%">Check Out/Hapus</th></center>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="{{ asset('foto makanan/foto burger.webp') }}"  class="card-img-top" alt="..."></td>
                    <td>Burger</td>
                    <td>
                      <div class="wrap-num-product flex-w m-r-20 m-tb-10" style="border-radius: 3px;">
                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-minus" style=" text-rendering: auto;"></i>
                        </div>
                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" style="width: 60px">
                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-plus" style="text-rendering: auto;"></i>
                        </div>
                      </div>  
                    </td>
                    <td>23.000</td>
                    <td>23.000</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info">Check Out</a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td><img src="{{ asset('foto makanan/fried-rice.jpg') }}"  class="card-img-top" alt="..."></td>
                    <td>Nasi Goreng</td>
                    <td>
                      <div class="wrap-num-product flex-w m-r-20 m-tb-10" style="border-radius: 3px;">
                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-minus" style=" text-rendering: auto;"></i>
                        </div>
                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" style="width: 60px">
                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-plus" style="text-rendering: auto;"></i>
                        </div>
                      </div>  
                    </td>
                    <td>23.000</td>
                    <td>23.000</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info">Check Out</a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td><img src="{{ asset('foto makanan/noodles.jpg') }}"  class="card-img-top" alt="..."></td>
                    <td>Mie Goreng</td>
                    <td>
                      <div class="wrap-num-product flex-w m-r-20 m-tb-10" style="border-radius: 3px;">
                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-minus" style=" text-rendering: auto;"></i>
                        </div>
                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" style="width: 60px">
                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-plus" style="text-rendering: auto;"></i>
                        </div>
                      </div>  
                    </td>
                    <td>23.000</td>
                    <td>23.000</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info">Check Out</a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td><img src="{{ asset('foto makanan/jus mangga.jpg') }}"  class="card-img-top" alt="..."></td>
                    <td>Jus Mangga</td>
                    <td>
                      <div class="wrap-num-product flex-w m-r-20 m-tb-10" style="border-radius: 3px;">
                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-minus" style=" text-rendering: auto;"></i>
                        </div>
                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" style="width: 60px">
                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-plus" style="text-rendering: auto;"></i>
                        </div>
                      </div>  
                    </td>
                    <td>23.000</td>
                    <td>23.000</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info">Check Out</a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                  <td><img src="{{ asset('foto makanan/fried-chicken crispy.jpg') }}"  class="card-img-top" alt="..."></td>
                    <td>Ayam Goreng Crispy</td>
                    <td>
                      <div class="wrap-num-product flex-w m-r-20 m-tb-10" style="border-radius: 3px;">
                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-minus" style=" text-rendering: auto;"></i>
                        </div>
                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" style="width: 60px">
                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="cursor: pointer; width: 45px; hight 100%;">
                          <i class="fs-16 zmdi zmdi-plus" style="text-rendering: auto;"></i>
                        </div>
                      </div>  
                    </td>
                    <td>23.000</td>
                    <td>23.000</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info">Check Out</a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
      </div>
      <!--/. container-fluid -->
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
