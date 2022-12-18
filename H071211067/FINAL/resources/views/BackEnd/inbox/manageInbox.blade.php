@extends('BackEnd.master')

@section('title')
    Inbox
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
          <th>Phone</th>
          <th>Message</th>

        </tr>
        </thead>
        <tbody>
        @php($i = 1)
        @foreach ($questions as $question)
            
        
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $question->question_name }}</td>
            <td>{{ $question->question_email }}</td>
            <td>{{ $question->question_phone }}</td>
            <td>{{ $question->question_detail }}</td>
            
        </tr>
        @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection