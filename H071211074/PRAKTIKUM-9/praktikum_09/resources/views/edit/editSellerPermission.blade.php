@extends('layouts.main');

@section('title', 'Edit Seller Permission')

@section('container')

<div class="mx-auto">
  <div class="card">
    <div class="card-header text-white" style="background :#CD5C5C;">
      Edit Seller Permission
    </div>
    <div class="card-body">
      <form action="/sellerPermission/update/{{$data->id}}" method="POST">
        @csrf
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Seller</label>
          <div class="col-sm-10">
            <select class="form-select" name="seller_id" id="seller_id">
              <option selected disabled>- Pilih Seller -</option>
              @foreach($Slr as $row)
              <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="address" class="col-sm-2 col-form-label">Permission</label>
          <div class="col-sm-10">
            <select class="form-select" name="permission_id" id="permission_id">
              <option selected disabled>- Pilih Permission -</option>
              @foreach($Perm as $row)
              <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
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

<script>
  $('.update').click(function() {
    var mhs = $(this).attr('data-id');
    swal({
      title: "Berhasil",
      text: "Data Telah Diupdate",
      icon: "success",
    });
  });
</script>

</html>