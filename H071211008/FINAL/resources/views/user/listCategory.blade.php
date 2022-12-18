<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Category</title>
 
  <!-- Google Font: Source Sans Pro -->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- font -->
  <script src="{{ asset('https://kit.fontawesome.com/7cf3c154cd.js') }}" crossorigin="anonymous"></script>

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
  
   <div id ="favorite col-12 ">
        <h1 class="text-center">Category</h1>
          <!-- ./row -->
          <div class="row">

          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <div class="card-tools tittle-expand col-md-12">
                  <center><a href="#maincouse" class="col-md-2 btn  bg-gradient-info" type="button" >Main Course</a>
                  <a href="#appatizer" class="col-md-2 btn  bg-gradient-info" type="button">appetizer</a>
                  <a href="#dessert" class="col-md-2 btn  bg-gradient-info" type="button">dessert</a>
                  <a href="#drink" class="col-md-2 btn  bg-gradient-info" type="button">drink</a></center>
                </div>
              </div>
              <br>
              <div class="form-group">
                <center><select class="form-control select2" style="width: 80%;"></center>
                  <option selected="selected">urutkan</option>
                  <option>Date</option>
                  <option>Price</option>
                  <option>Favorite</option>
                </select>
              </div>

              <div class="card-body">
                <!-- Main course-->
                <div id="main course" class="info-box bg-white">
                  <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-info">main course</div>
                  </div>    
                  <div class="info-box-content">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/noodles.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/fried-rice.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/nasi ayam goreng.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/steak.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>    
                  </div>
                  <!-- /.info-box-content -->
                </div>

                <!-- appatizer -->
                <div id="appatizer" class="info-box bg-white">
                  <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-info">appatizer</div>
                  </div>    
                  <div class="info-box-content">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/foto pizza.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/fast-food.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/salad.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/canape.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>     
                  </div>
                  <!-- /.info-box-content -->
                </div>

                <!-- dessert -->
                <div id="dessert" class="info-box bg-white">
                  <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-info">Dessert</div>
                  </div>    
                  <div class="info-box-content">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/cake coklat.jpeg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/puding buah.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/lava cake.jpeg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/strawberry jar.jpeg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>    
                  </div>
                  <!-- /.info-box-content -->
                </div>

                <!-- drink -->
                <div id="drink" class="info-box bg-white">
                  <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-info">Drink</div>
                  </div>    
                  <div class="info-box-content">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/lemon tea.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/ice coklat.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/coffe milk.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="col-md-3">
                        <div class="card card-success">
                          <div class="card-header">
                            <img src="{{ asset('foto makanan/jus mangga.jpg') }}" class="card-img-top" alt="...">
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            The body of the card
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>  
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->  
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
