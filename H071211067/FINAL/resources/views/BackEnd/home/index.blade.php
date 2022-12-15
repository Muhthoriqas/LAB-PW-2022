@extends('BackEnd.master')

@section('title')
    Home Page
@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
    </div><!-- /.col -->
    </div><!-- /.row -->

</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <div class="inner">
            <h3>{{ $countCate }}</h3>
                <p>Total Category</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-list"></i>
            </div>
            <a href="{{ route('manage_cate') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $countCoupon }}</h3>

                <p>Total Coupon</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-ticket-alt"></i>
            </div>
            <a href="{{ route('manage_coupon') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $countComputer }}</h3>

                <p>Total Computer</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-laptop"></i>
            </div>
            <a href="{{ route('manage_computer') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <h3> {{ $countUser }}</h3>

                <p>Total User</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('manage_user') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- ./col -->

</section>
    


    
@endsection