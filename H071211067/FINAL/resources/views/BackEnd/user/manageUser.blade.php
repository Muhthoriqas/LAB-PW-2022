@extends('BackEnd.master')

@section('title')
    User
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
          <th>Email</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($i = 1)
        @foreach ($users as $user)
            
        
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            
            <td>
              <a class="btn btn-danger" href="{{ route('user_delete', ['id'=>$user->id]) }}">
                <i class="fas fa-trash" title="Click to destroy"></i>
              </a>
            </td>
        </tr>
        @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection