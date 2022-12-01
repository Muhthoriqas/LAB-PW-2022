<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
    <link href="resources/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<a type="button" class="btn btn-primary" href="index" style="color: white;">Back</a>

<form  action="{{url('update', $mahasiswa->id)}}" method="post">
    {{ csrf_field() }}
  <div class="mb-3 col-6">
    <label class="form-label">NIM</label>
    <input type="text" name="nim" placeholder="Input Here" class="form-control" value="{{$mahasiswa->nim}}" required>
  </div>
  <div class="mb-3 col-6">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" placeholder="Input Here" class="form-control" value="{{$mahasiswa->nama}}" required>
  </div>
  <div class="mb-3 col-6">
    <label class="form-label">Fakultas</label>
    <input type="text" name= "fakultas" placeholder="Input Here" class="form-control" value="{{$mahasiswa->fakultas}}" required>
  </div>
  <div class="mb-3 col-6">
    <label class="form-label">Alamat</label>
    <input type="text" name="alamat" placeholder="Input Here" class="form-control" value="{{$mahasiswa->alamat}}" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Edit Data</button>
</form>
  </tbody>
</table>