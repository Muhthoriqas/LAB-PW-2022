@extends('BackEnd.master')

@section('title')
    Category Page
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
                        Category
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cate_save')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="category_name">
                            </div>
                            <div class="form-group">
                                <label>Order Number</label>
                                <input type="number" class="form-control" name="order_number">
                            </div>
                            <div class="form-group">
                                <label>Added On</label>
                                <input type="date" class="form-control" name="added_on">
                            </div>
                            <div class="form-group">
                                <label>Select Category Status</label>
                                <div class="radio">
                                    <input type="radio" name="category_status" value="1">Active
                                    <input type="radio" name="category_status" value="0">Inactive
                                </div>
                            </div>
                            <button type="submit" name="btn" class="btn btn-primary btn-block">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection