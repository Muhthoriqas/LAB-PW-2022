@extends('BackEnd.master')

@section('title')
    Computer Page
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
                        Computer
                    </div>
                    <div class="card-body">
                        <form action="{{ route('computer_save')}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="computer_name">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id" class="form-control">
                                    <option>--- Select Category ---</option>
                                    @foreach ($categories as $cate)
                                        <option value="{{ $cate->category_id }}"> {{ $cate->category_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea type="text" name="computer_detail" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="computer_image" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label>Select Status</label>
                                <div class="radio">
                                    <input type="radio" name="computer_status" value="1">Active
                                    <input type="radio" name="computer_status" value="0">Inactive
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" title="Attribute">Attribute</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="full" placeholder="Full" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="full_price" placeholder="Enter Price" required>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
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