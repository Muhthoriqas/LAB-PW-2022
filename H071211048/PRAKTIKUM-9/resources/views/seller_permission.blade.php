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
                    <a class="nav-link active" href="/seller">Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/permission">Permission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Permission</a>
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
                <form action="/sellerPermission/tambah" method="POST">
                <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">seller</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="seller_id" name="seller_id">
                                <option selected disabled>pilih seller
                                @foreach($seller as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="category_id" class="col-sm-2 col-form-label">permission</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="permission_id" name="permission_id">
                                <option selected disabled>pilih kategori
                                @foreach($perm as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                </option>
                            </select>
                        </div>
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
                            <th scope="col">seller</th>
                            <th scope="col">permission</th>
                            <th scope="col">created at</th>
                            <th scope="col">update at</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($sellerPerm as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td scope="row">{{$item->seller->name}}</td>
                            <td scope="row">{{$item->permission->name}}</td>\
                            <td scope="row">{{$item->created_at}}</td>
                            <td scope="row">{{$item->updated_at}}</td>
                            <td scope="row">
                                <a href="/sellerPermission/edit/{{$item->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                <a href="/sellerPermission/delete/{{$item->id}}"><button type="button" class="btn btn-warning">Delete</button></a>
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