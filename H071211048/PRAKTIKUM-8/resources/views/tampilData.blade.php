<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<h1 class="tambah mb-3 mt-3" style="text-align: center;">edit</h1>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
            <form action="/updateData/{{$data->id}}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value= "{{$data->nama}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim" value= "{{$data->nim}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$data->alamat}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="fakultas" id="fakultas">
                                <option value="" selected>{{$data->Fakultas}}</option>
                                <option value="Saintek">Saintek</option>
                                <option value="Soshum">Soshum</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit"  value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
    
</body>
</html>