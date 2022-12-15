@extends('BackEnd.master')

@section('title')
    Coupon Page
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-5 my-lg-5">
                <div class="card">

                    {{-- ========= Message ========= --}}
                    @if(Session::get('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('message')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    {{-- ========= Message ========= --}}

                    <div class="card-header text-center">
                        Coupon Code
                    </div>
                    <div class="card-body">
                        <form action="{{ route('coupon_save')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="coupon_code">
                            </div>
                            <div class="form-group">
                                <label>Value</label>
                                <input type="text" class="form-control" name="coupon_value">
                            </div>
                            <div class="form-group">
                                <label>Cart Min Value</label>
                                <input type="text" class="form-control" name="cart_min_value">
                            </div>
                            <div class="form-group">
                                <label>Expired Date</label>
                                <input type="date" class="form-control" name="expired_on">
                            </div>
                            <div class="form-group">
                                <label>Added On</label>
                                <input type="date" class="form-control" name="added_on">
                            </div>
                            <div class="form-group">
                                <label>Select Coupon Type</label>
                                <div class="radio">
                                    <input type="radio" name="coupon_type" value="1">Percentage
                                    <input type="radio" name="coupon_type" value="0">Fixed
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Select Coupon Status</label>
                                <div class="radio">
                                    <input type="radio" name="coupon_status" value="1">Active
                                    <input type="radio" name="coupon_status" value="0">Inactive
                                </div>
                            </div>
                            <button type="submit" name="btn" class="btn btn-primary btn-block">Coupon Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection