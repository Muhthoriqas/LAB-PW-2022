<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
    .mx-auto {
        width: 80%;
    }

    .card {
        margin-top: 15px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/category">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/permission">Permission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/sellerPermission">Permission</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>  
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>

            <div class="card-body">
                <form action="/seller/tambah" method="POST">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">gender</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gender" name="gender">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">no hp</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="noHp" name="noHp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>


        <div class="card">
            <div class="card-header text-white bg-secondary">
                data produk
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">address</th>
                            <th scope="col">gender</th>
                            <th scope="col">no hp</th>
                            <th scope="col">status</th>
                            <th scope="col">created at</th>
                            <th scope="col">update at</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                    $i = ($data->currentpage()-1)*$data->perpage()+1;
                    @endphp
                    @foreach($data as $item)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td scope="row">{{$item->name}}</td>
                            <td scope="row">{{$item->address}}</td>
                            <th scope="row">{{$item->gender}}</th>
                            <td scope="row">{{$item->noHp}}</td>
                            <td scope="row">{{$item->gender}}</td>
                            <td scope="row">{{$item->created_at}}</td>
                            <td scope="row">{{$item->updated_at}}</td>
                            <td scope="row">
                                <a href="/seller/edit/{{$item->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                <a href="/seller/delete/{{$item->id}}"><button type="button" class="btn btn-warning">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$data->links()}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>