<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nim" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nama" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="alamat" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="fakultas">
                                <option value=""></option>
                                <option value="FEB">FEB</option>
                                <option value="FH">FH</option>
                                <option value="FK">FK</option>
                                <option value="FT">FT</option>
                                <option value="FISIP">FISIP</option>
                                <option value="FIB">FIB</option>
                                <option value="FAPERTA">FAPERTA</option>
                                <option value="FMIPA">FMIPA</option>
                                <option value="FAPET">FAPET</option>
                                <option value="FKG">FKG</option>
                                <option value="FKM">FKM</option>
                                <option value="FIKP">FIKP</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="bg-primary text-light" name="simpan">Simpan Data</button>
                </form>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-header bg-secondary text-light">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Fakultas</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->fakultas }}</td>
                        <td>
                            <a href="/edit/{{ $item->id }}" type="button" class="btn btn-warning">Edit</a>
                            <a href="/delete/{{ $item->id }}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>