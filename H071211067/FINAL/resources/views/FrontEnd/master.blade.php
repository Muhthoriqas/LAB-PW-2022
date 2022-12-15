<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('FrontEndSourceFile/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('FrontEndSourceFile/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('FrontEndSourceFile/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('FrontEndSourceFile/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('FrontEndSourceFile/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('FrontEndSourceFile/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('FrontEndSourceFile/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('FrontEndSourceFile/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('FrontEndSourceFile/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('FrontEndSourceFile/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('FrontEndSourceFile/assets/css/style.css')}}" rel="stylesheet">
   
  <!-- Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <!-- =======================================================
  * Template Name: Company - v4.9.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    

    

  {{-- Header --}}
  @include('FrontEnd.include.header')
  {{-- End Header --}}

  {{-- Hero Selection --}}
  @include('FrontEnd.include.heroselection')
  {{-- End Hero Selection --}}

  {{-- Main Content --}}
  <main id="main">
    @yield('content')
  </main>
  {{-- End Main Content --}}

  {{-- Footer --}}
  @include('FrontEnd.include.footer')
  {{-- End Footer --}}


    

  <!-- Vendor JS Files -->
  <script src="{{asset('FrontEndSourceFile/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('FrontEndSourceFile/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('FrontEndSourceFile/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('FrontEndSourceFile/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('FrontEndSourceFile/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('FrontEndSourceFile/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('FrontEndSourceFile/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('FrontEndSourceFile/assets/js/main.js')}}"></script>

  <!-- AdminLTE App -->
  <script src="{{ asset('BackEndSourceFile')}}/dist/js/adminlte.min.js"></script>
  <script src="{{ asset('BackEndSourceFile')}}/plugins/datatables/jquery.dataTables.js"></script>
  <script src="{{ asset('BackEndSourceFile')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

  <!-- jQuery -->
  <script src="{{ asset('BackEndSourceFile')}}/plugins/jquery/jquery.min.js"></script>
</body>