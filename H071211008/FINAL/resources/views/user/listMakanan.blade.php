<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Makanan</title>

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
        <h1 class="text-center">Food Center</h1>
            <!-- ./row -->
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-info card-tabs">
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
                  <li class="nav-item ml-auto">
                    <div class="clearfix card-tools">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="card-body">
                <!-- all -->
                <div class="tab-content" id="custom-tabs-one-tabContent">

                  <div class="tab-pane fade show active" id="custom-tabs-one-all" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <div class="row">
                      <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                          <img src="{{ asset('foto makanan/foto burger.webp') }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <div class="col-12" id="accordion">
                              <div class="outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                    <div class="header">
                                        <h4 class="title w-100 text-light">
                                           BURGER
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                      <div class="row">
                                        <p class="col-6">Junk Food</p>
                                        <p class="col-6">Tag</p>
                                      </div>
                                    
                                    <p class="card-text">Burger dengan beef patties yang tebal dan saus keju</p>
                                    <p>RP 50.000</p>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <p class="card-text-warning fas fa-star">4,8 | <i class="card-text small">256 terjual</i></p>
                            <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Beli Sekarang</a>
                            <a href="#" type="button" class="btn btn-block btn-outline-danger">Masukkan Keranjang</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                          <img src="{{ asset('foto makanan/foto burger.webp') }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <div class="col-12" id="accordion">
                              <div class="outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                    <div class="header">
                                        <h4 class="title w-100 text-light">
                                           BURGER
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                      <div class="row">
                                        <p class="col-6">Junk Food</p>
                                        <p class="col-6">Tag</p>
                                      </div>
                                    
                                    <p class="card-text">Burger dengan beef patties yang tebal dan saus keju</p>
                                    <p>RP 50.000</p>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <p class="card-text-warning fas fa-star">4,8 | <i class="card-text small">256 terjual</i></p>
                            <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Beli Sekarang</a>
                            <a href="#" type="button" class="btn btn-block btn-outline-danger">Masukkan Keranjang</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                          <img src="{{ asset('foto makanan/foto burger.webp') }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <div class="col-12" id="accordion">
                              <div class="outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                    <div class="header">
                                        <h4 class="title w-100 text-light">
                                           BURGER
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseThree" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                      <div class="row">
                                        <p class="col-6">Junk Food</p>
                                        <p class="col-6">Tag</p>
                                      </div>
                                    
                                    <p class="card-text">Burger dengan beef patties yang tebal dan saus keju</p>
                                    <p>RP 50.000</p>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <p class="card-text-warning fas fa-star">4,8 | <i class="card-text small">256 terjual</i></p>
                            <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Beli Sekarang</a>
                            <a href="#" type="button" class="btn btn-block btn-outline-danger">Masukkan Keranjang</a>
                          </div>
                        </div>
                      </div>
                    </div>          
                  </div>
                    
                  <!-- Favorite -->
                  <div class="tab-pane fade " id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <div class="row">
                      <div class="col-sm">
                        <div class="card " style="width: 18rem;">
                          <img src="{{ asset('foto makanan/noodles.jpg') }}" class="card-img-top" alt="...">
                          <div class="card-body ">
                            <div class="ribbon-wrapper ribbon-lg">
                              <div class="ribbon bg-primary">
                                recomended
                              </div>
                            </div>
                            <div class="outline">
                              <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                <div class="header">
                                  <h4 class="title w-100 text-light">
                                    Mie Goreng
                                  </h4>
                                </div>
                              </a>
                              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                  <div class="row">
                                    <p class="col-6">Junk Food</p>
                                    <p class="col-6">Tag</p>
                                  </div>
                                  
                                  <p class="card-text">Mie goreng pedas manis</p>
                                  <p>RP 50.000</p>
                                </div>
                              </div>
                            </div>
                            <p class="card-text-warning fas fa-star">4,9 | <i class="card-text small">438 terjual</i></p>
                            <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Beli Sekarang</a>
                            <a href="#" type="button" class="btn btn-block btn-outline-danger">Masukkan Keranjang</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    
                  <!-- price -->
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                    <div class="row">
                      <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                          <img src="{{ asset('foto makanan/foto eskrim.jpg') }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <div class="outline">
                              <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                <div class="header">
                                  <h4 class="title w-100 text-light">
                                  Es krim
                                  </h4>
                                </div>
                              </a>
                              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                  <div class="row">
                                    <p class="col-6">Junk Food</p>
                                    <p class="col-6">Tag</p>
                                  </div>
                                  
                                  <p class="card-text">Eskrim manis, lembut dan menyegarkan</p>
                                  <p>RP 50.000</p>
                                </div>
                              </div>
                            </div>
                            <p class="card-text-warning fas fa-star">4,4 | <i class="card-text small">256 terjual</i></p>
                            <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Beli Sekarang</a>
                            <a href="#" type="button" class="btn btn-block btn-outline-danger">Masukkan Keranjang</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    
               
                  <!-- order -->
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                    <div class="row">
                      <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                          <img src="{{ asset('foto makanan/foto pizza.jpg') }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <div class="outline">
                              <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                <div class="header">
                                  <h4 class="title w-100 text-light">
                                    Pizza
                                  </h4>
                                </div>
                              </a>
                              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                  <div class="row">
                                    <p class="col-6">Junk Food</p>
                                    <p class="col-6">Tag</p>
                                  </div>
                                  
                                  <p class="card-text">Pizza ukuran medium dengan topping papperoni yang melimpah</p>
                                  <p>RP 50.000</p>
                                </div>
                              </div>
                            </div>
                            <p class="card-text-warning fas fa-star">4,7 | <i class="card-text small">504 terjual</i></p>
                            <a href="" type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-edit">Beli Sekarang</a>
                            <a href="#" type="button" class="btn btn-block btn-outline-danger">Masukkan Keranjang</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              <!-- /.card -->
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
