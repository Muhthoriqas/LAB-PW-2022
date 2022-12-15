@extends('BackEnd.master')

@section('title')
    Computer Manage
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
          <th>Name</th>
          <th>Category</th>
          <th>Detail</th>
          <th>Image</th>
          <th>Added On</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @php($i = 1)

        @foreach ($computers as $computer)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $computer->computer_name }}</td>
            <td>{{ $computer->category_name }}</td>
            <td>{{ $computer->computer_detail }}</td>
            <td>
              <img src="{{ asset($computer->computer_image) }}" height="25" width="60" class="img-fluid img-thumbnail">
            </td>
            <td>{{ $computer->created_at }}</td>
            <td>
                
                @if($computer->computer_status == 1)
                  <a class="btn btn-dark" href="{{ route('inactive_computer', ['computer_id'=>$computer->computer_id])}}">
                    <i class="fas fa-arrow-up" title="Click to inactive"></i>
                  </a>
                @else
                  <a class="btn btn-dark" href="{{ route('computer_active', ['computer_id'=>$computer->computer_id])}}">
                    <i class="fas fa-arrow-down" title="Click to active"></i>
                  </a>
                @endif
  
                <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $computer->computer_id }}">
                  <i class="fas fa-edit" title="Click to change it"></i>
                </a>
                <a class="btn btn-danger" href="{{ route('computer_delete', ['computer_id'=>$computer->computer_id]) }}">
                  <i class="fas fa-trash" title="Click to destroy"></i>
                </a>
  
  
              </td> 
        </tr>

        {{-- ========= Modal Start Here ========= --}}

        <div class="modal fade" id="edit{{ $computer->computer_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Computer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{ route('computer_update') }}" method="POST" enctype="multipart/form-data">

                  @csrf
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="computer_name" value="{{ $computer->computer_name }}">
                    <input type="hidden" class="form-control" name="computer_id" value="{{ $computer->computer_id }}">
                  </div>
                  <div class="form-group">
                    <label>Previous Category</label>
                    <input type="text" class="form-control" value="{{ $computer->category_name}}">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        {{-- <option>--- Select Category ---</option> --}}
                        @foreach ($categories as $cate)
                            <option value="{{ $cate->category_id }}"> {{ $cate->category_name}} </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Detail</label>
                    <textarea type="text" name="computer_detail" class="form-control" rows="3">{{ $computer->computer_detail }}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Previous Image</label>
                    <img src="{{ asset($computer->computer_image) }}" style="height: 150px; width: 150px; border-radius: 50%">
                    <input type="file" class="form-control" name="computer_image" accept="image/*">
                  </div>

                  <div class="card">
                    <div class="card-header">Attribute</div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="full" value="{{ $computer->full }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="full_price" value="{{ $computer->full_price }}">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
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