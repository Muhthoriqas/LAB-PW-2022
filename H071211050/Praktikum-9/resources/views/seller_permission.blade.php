<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Tugas 9</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Tugas 9</span>
        </div>
    </nav>
    <div class="heading">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Data</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahDataS_Permission">
                        + Tambah Seller Permission
                    </button>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="sellers">Sellers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="permission">Permission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page">Seller Permission</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex" method="GET" action="index" role="search">
                    <input class="form-control me-2" type="search" name="search" placeholder="Masukkan Nama" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </div>

    <div class="d-flex justify-content-center flex-column align-items-center mt-5">

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show w-75" role="alert">
            @foreach ($errors->all() as $error)
                <strong> {{$error}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endforeach
    </div>
    @endif

        @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show w-75" role="alert">
                <strong> {{$message}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($message = Session::get('exist'))
            <div class="alert alert-danger alert-dismissible fade show w-75" role="alert">
                <strong> {{$message}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <?php if(isset($_GET['search'])){ 
            $searchData = $_GET['search'];    
        ?>
            <div class="alert alert-success alert-dismissible fade show w-75" role="alert">
                <strong>Data Yang Dicari ' <?php echo $searchData; ?> '</strong>
                <a type="button" class="btn-close" aria-label="Close" href="index?page=1"></a>
            </div>
        <?php } ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Seller</th>
                    <th scope="col">Permission</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

            @foreach($data as $index => $item)
                <tr>
                    <td> {{ $index + $data->firstItem() }} </td>
                    <td> {{ $item->seller_id }} </td>
                    <td> {{ $item->permission_id }} </td>
                    <td> {{ $item->created_at }} </td>
                    <td> {{ $item->updated_at }} </td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editS_PermissionUseQueryBuilder{{ $item->id }}" type="button">Edit</button>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteS_PermissionUseQueryBuilder{{ $item->id }}" type="button">Hapus</button>
                        </div>
                    </td>
                </tr>
                
                
                <!--------------------MODAL Hapus Data---------------------------------->

                <div class="modal fade" id="deleteS_PermissionUseQueryBuilder{{ $item->id }}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="ModalLabel">Confirm</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Hapus Data {{ $item->id }} ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a type="button" class="btn btn-danger" href="deleteS_PermissionUseQueryBuilder/{{ $item->id }}">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--------------------MODAL Edit Data----------------------------------->

                <div class="modal fade" id="editS_PermissionUseQueryBuilder{{ $item->id }}" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel">Edit Data Seller Permission</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="editS_PermissionUseQueryBuilder/{{ $item->id }}" method="POST">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Seller</label>
                                        <div class="col-sm-10">
                                        <select class="form-select" name="seller" aria-label="Default select example">
                                            <option selected value="{{ $item->seller_id }}"> -- {{ $item->seller_id }}</option>
                                            @foreach ($data1 as $index1)
                                                <option value="{{ $index1->id }}">{{ $index1->name }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Permission</label>
                                        <div class="col-sm-10">
                                        <select class="form-select" name="permission" aria-label="Default select example">
                                            <option selected value="{{ $item->permission_id }}">-- {{ $item->permission_id }}</option>
                                            @foreach ($data2 as $index2)
                                                <option value="{{ $index2->id }}">{{ $index2->name }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <button type="submit" name="edit" class="btn btn-primary">Simpan Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <!--------------------MODAL Tambah Data----------------------------------->

    <div class="modal fade" id="tambahDataS_Permission" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Tambah Seller Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="saveS_PermissionUseQueryBuilder" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Seller</label>
                            <div class="col-sm-10">
                            <select class="form-select" name="seller" aria-label="Default select example">
                                <option selected value="">Open this select menu</option>
                                @foreach ($data1 as $index1)
                                    <option value="{{ $index1->id }}">{{ $index1->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Permission</label>
                            <div class="col-sm-10">
                            <select class="form-select" name="permission" aria-label="Default select example">
                                <option selected value="">Open this select menu</option>
                                @foreach ($data2 as $index2)
                                    <option value="{{ $index2->id }}">{{ $index2->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="paginationButtonLink">
        {{ $data->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>