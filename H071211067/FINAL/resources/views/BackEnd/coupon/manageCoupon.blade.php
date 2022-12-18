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
          <th>Code</th>
          <th>Type</th>
          <th>Value</th>
          <th>Cart Min</th>
          <th>Expired On</th>
          <th>Added On</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($i = 1)
        @foreach ($coupons as $code)
            
        
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $code->coupon_code }}</td>
            <td>

                @if($code->coupon_type == 1)
                    Percentage
                @else
                    Fixed
                @endif

            </td>
            <td>{{ $code->coupon_value }}</td>
            <td>{{ $code->cart_min_value }}</td>
            <td>{{ $code->expired_on }}</td>
            <td>{{ $code->added_on }}</td>    
            <td>
                
              @if($code->coupon_status == 1)
                <a class="btn btn-dark" href="{{ route('inactive_coupon', ['coupon_id'=>$code->coupon_id])}}">
                  <i class="fas fa-arrow-up" title="Click to inactive"></i>
                </a>
              @else
                <a class="btn btn-dark" href="{{ route('coupon_active', ['coupon_id'=>$code->coupon_id])}}">
                  <i class="fas fa-arrow-down" title="Click to active"></i>
                </a>
              @endif

              <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $code->coupon_id }}">
                <i class="fas fa-edit" title="Click to change it"></i>
              </a>
              <a class="btn btn-danger" href="{{ route('coupon_delete', ['coupon_id'=>$code->coupon_id]) }}">
                <i class="fas fa-trash" title="Click to destroy"></i>
              </a>


            </td>
        </tr>

        {{-- ========= Modal Start Here ========= --}}

        <div class="modal fade" id="edit{{ $code->coupon_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Coupon Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{ route('coupon_update') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="coupon_name" value="{{ $code->coupon_code }}">
                    <input type="hidden" class="form-control" name="coupon_id" value="{{ $code->coupon_id }}">
                  </div>
                  <div class="form-group">
                    <label>Value</label>
                    <input type="text" class="form-control" name="coupon_value" value="{{ $code->coupon_value }}">
                  </div>
                  <div class="form-group">
                    <label>Cart Min Value</label>
                    <input type="text" class="form-control" name="cart_min_value" value="{{ $code->cart_min_value }}">
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