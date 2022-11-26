<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mahasiswa</title>

  <!-- Link Bootstraps -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Link CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 class="text-center mb-4">Data Mahasiswa</h1>

  <div class="container">
    <a href="/tambahmahasiswa" type="button" class="btn btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
      + Tambah data
    </a>

    <!-- Start Menambahkan Data  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/insertdata" method="POST">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fakultas</label>
                <select class="form-select" name="fakultas" aria-label="Default select example">
                  <option selected>Pilih Fakultas</option>
                  <option value="saintek">saintek</option>
                  <option value="soshum">soshum</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Menambahkan Data -->
    <!-- Start Menampilkan Data -->
    <div class="row">
      @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($data as $index=> $row)
          <tr>
            <th scope="row"> {{ $index + $data->firstItem() }} </th>
            <td> {{ $row->nim }} </td>
            <td> {{ $row->nama }} </td>
            <td> {{ $row->alamat }} </td>
            <td> {{ $row->fakultas }} </td>
            <td>
              <button class="btn text-white" style="background-color: #9370DB;" data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}">
                Edit
              </button>
              <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}" data-bs-toggle="modal">Delete</a>
            </td>
          </tr>
          <!-- Start Edit Data -->
          <div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="/updatedata/{{ $row->id }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label for="nim" class="form-label">NIM</label>
                      <input type="text" class="form-control" name="nim" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ $row->nim }} ">
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ $row->nama }} ">
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ $row->alamat }} ">
                    </div>
                    <div class="mb-3">
                      <label for="fakultas" class="form-label">Fakultas</label>
                      <select class="form-select" name="fakultas" aria-label="Default select example">
                        <option selected>{{ $row->fakultas }}</option>
                        <option value="saintek">saintek</option>
                        <option value="soshum">soshum</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End Edit Data -->
          @endforeach
        </tbody>
      </table>
      {{ $data->links() }}
    </div>
    <!-- End Menampilkan Data -->
  </div>



  <!-- Link bootstraps -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <!-- Link sweet alerts -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Link jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</body>
<!-- Start Delete Data -->
<script>
  $('.delete').click(function() {
    var mahasiswaid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
        title: "Yakin ingin menghapus data?",
        text: "Kamu akan menghapus data mahasiswa dengan nama " + nama + " ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/delete/" + mahasiswaid + ""
          swal("Data berhasil dihapus", {
            icon: "success",
          });
        } else {
          swal("Data tidak jadi dihapus");
        }
      });
  });
</script>
<!-- End Delete Data -->

</html>