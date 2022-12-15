@extends('BackEnd.master')

@section('title')
    Category Manage
@endsection

@section('content')

<div class="card my-5">

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

    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Category name</th>
          <th>Order Number</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($i = 1)
        @foreach ($categories as $cate)
            
        
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $cate->category_name }}</td>
            <td>{{ $cate->order_number }}</td>
            
            <td>
                
              
              @if($cate->category_status == 1)
                <a class="btn btn-dark" href="{{ route('inactive_cate', ['category_id'=>$cate->category_id])}}">
                  <i class="fas fa-arrow-up" title="Click to inactive"></i>
                </a>
              @else
                <a class="btn btn-dark" href="{{ route('category_active', ['category_id'=>$cate->category_id])}}">
                  <i class="fas fa-arrow-down" title="Click to active"></i>
                </a>
              @endif

              <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $cate->category_id }}">
                <i class="fas fa-edit" title="Click to change it"></i>
              </a>
              <a class="btn btn-danger" href="{{ route('cate_delete', ['category_id'=>$cate->category_id]) }}">
                <i class="fas fa-trash" title="Click to destroy"></i>
              </a>


            </td>
        </tr>

        {{-- ========= Modal Start Here ========= --}}

        <div class="modal fade" id="edit{{ $cate->category_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{ route('cate_update') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="category_name" value="{{ $cate->category_name }}">
                    <input type="hidden" class="form-control" name="category_id" value="{{ $cate->category_id }}">
                  </div>
                  <div class="form-group">
                    <label>Order Number</label>
                    <input type="number" class="form-control" name="order_number" value="{{ $cate->order_number }}">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="btn" class="btn btn-primary" value="Update">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
            
        {{-- ========== Modal End Here ========== --}}
        @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection