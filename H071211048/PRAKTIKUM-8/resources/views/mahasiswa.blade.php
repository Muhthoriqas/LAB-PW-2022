<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<h1 style="text-align: center;" class="data mt-3 mb-3">data mahasiswa</h1>

<div class= "container">
    <a href="/tambahDataMahasiswa" class="btn btn-success mb-2">tambah data</a>
    <div class = "row">
    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
    @endif
        <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Alamat</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @php
            $no=1;
        @endphp
        @foreach ($data as $index=> $row)
        <tr>
            <th scope="row">{{$index + $data->firstItem()}}</th>
            <td>{{$row->nama}}</td > 
            <td>{{$row->nim}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->fakultas}}</td>
            <td>
                <a href="/tampilkanData/{{$row->id}}" type="button" class="btn btn-warning">Edit</a>
                <a href="/hapusData/{{$row->id}}"  type= "button" class="btn btn-danger hapusData" data-id="{{$row->id}}"
                data-nama="{{$row->nama}}">Delete</a>
            </td>
            </tr>
        @endforeach    
        </tbody>
        </table>
        {{$data->links()}}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>
<script>
    $('.hapusData').click(function(){
        var mahasiswaId = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        swal({
        title: "apakah kamu yakin?",
        text: "kamu akan menghapus data mahasiswa dengan nama "+nama+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location="/hapusData/"+mahasiswaId+""
            swal("data sudah dihapus", {
            icon: "success",
            });
        } else {
            swal("data tidak jadi dihapus");
        }
        });
    });
</script>
</html>