<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>category</title>

  <!-- Link Bootstraps -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Link CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- start navbar -->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/seller">Seller</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/category">Category</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/permission">Permission</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/product">Product</a>
            </div>
        </div>
        <!-- end navbar -->
        <!-- start -->
        <div class="container">
            <h1 class="text-center mb-4">Category</h1>
            <div class="card">
                <!-- Start tambah data  -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/insertdatacategory" method="POST">
                                    @csrf
                                    <div                                                                                                                                                            
                                    class="mb-3 row">
                                        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="status" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tambah data -->
                <!-- star tampil data -->
                <div class="card">
                    <div class="card-header">
                    <a href="/tambahcategory" type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal"> + Tambah data</a> 
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $index=> $category)
                            <tr>
                                <th scope="category"> {{ $index + $data->firstItem() }} </th>
                                <td> {{ $category->name }} </td>
                                <td> {{ $category->status }} </td>
                                <td>
                                    <button class="btn text-white btn-warning" data-bs-toggle="modal" data-bs-target="#edit{{ $category->id }}">Edit</button>
                                    <a href="#" class="btn btn-danger delete" data-id="{{ $category->id }}" data-nama="{{ $category->name }}" data-bs-toggle="modal">Delete</a>
                                </td>
                            </tr>
                            <!-- star edit data -->
                            <div class="modal fade" id="edit{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/updatedatacategory/{{ $category->id }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="mb-3 row">
                                                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ $category->name }} " required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Status</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="status" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ $category->status }} " required>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end edit data -->
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
                <!-- end tampil data -->
            </div>
        </div>
    </div>
     
    



<!-- Link bootstraps -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- Link sweet alerts -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Link jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</body>
<!-- start delete data -->
<script>
  $('.delete').click(function() {
    var categoryid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
        title: "Hapus data?",
        text: "Data dengan nama " + nama + " akan dihapus",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/deletecategory/" + categoryid + ""
          swal("Data berhasil dihapus", {
            icon: "success",
          });
        } else {
          swal("Data tidak jadi dihapus");
        }
      });
  });
</script>
<!-- end delete data -->

</html>