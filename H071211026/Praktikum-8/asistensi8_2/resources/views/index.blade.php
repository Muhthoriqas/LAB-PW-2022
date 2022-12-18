<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>DISPLAY</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="resources/css/style.css" rel="stylesheet">
  </head>
  <body>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Fakultas</th>
              <th scope="col">Alamat</th>
              <th scope="col"><span>Actions</span></th>
            </tr>
          </thead>
          <tbody>
            @foreach($dtmahasiswa as $row)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nim }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->fakultas }}</td>
                <td>{{ $row->alamat }}</td>
                <td>
                  <a href="{{url('edit', $row->id)}}" class="btn btn-warning">Edit</a>
                  <a href="{{url('delete', $row->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        <div class="card-footer">{{$dtmahasiswa->links()}}</div>
        <a type="button" class="btn btn-primary" href="{{route('create')}}">Insert Data</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
     integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>

    @include('sweetalert::alert')
  </body> 
</html>
