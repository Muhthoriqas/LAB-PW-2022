@extends('template.layout')

@section('title', 'Dashboard')

@section('content')
    <ul class="navbar-nav pl-3 align-item-center">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <button class="btn btn-outline-dark">
                    <i class="fas fa-bars"></i>
                </button>
            </a>
        </li>
    </ul>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <h1><strong>Dashboard</strong></h1>
            <hr>
            <p class="h3"><strong> Kelas </strong> </p>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="far bi bi-door-closed"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Kelas</span>
                            <span class="info-box-number">10</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <p class="h3"><strong> Mahasiswa </strong> </p>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="far bi bi-person-vcard"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total</span>
                            <span class="info-box-number">10</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far bi bi-gender-male"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Laki-Laki</span>
                            <span class="info-box-number">10</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far bi bi-gender-female"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Perempuan</span>
                            <span class="info-box-number">10</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <p class="h3"><strong> Dosen </strong> </p>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="far bi bi-person-lines-fill"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total</span>
                            <span class="info-box-number">10</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far bi bi-gender-male"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Laki-Laki</span>
                            <span class="info-box-number">10</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far bi bi-gender-female"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Perempuan</span>
                            <span class="info-box-number">10</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
@endsection
