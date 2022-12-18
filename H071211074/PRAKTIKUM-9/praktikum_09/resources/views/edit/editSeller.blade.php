@extends('layouts.main');

@section('title', 'Edit Seller')

@section('container')

<div class="mx-auto">
  <div class="card">
    <div class="card-header text-white" style="background : #CD5C5C;">
      Edit Seller
    </div>
    <div class="card-body">
      <form action="/seller/update/{{$data->id}}" method="POST">
        @csrf
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="address" class="col-sm-2 col-form-label">Adress</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="address" name="address" value="{{$data->address}}" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="gender" class="col-sm-2 col-form-label">Gender</label>
          <div class="col-sm-10">
            <select class="form-select" name="gender" id="gender">
              <option selected disabled>- Pilih Gender-</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="no_hp" class="col-sm-2 col-form-label">No.Hp</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{$data->no_hp}}" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="status" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="status" name="status" value="{{$data->status}}" required>
          </div>
        </div>
        <div class="col-3" style="float:right">
          <input type="submit" name="simpan" value="Simpan Data" class="btn" style="color : white; background : #191919;" />
        </div>
    </div>
  </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


</html>