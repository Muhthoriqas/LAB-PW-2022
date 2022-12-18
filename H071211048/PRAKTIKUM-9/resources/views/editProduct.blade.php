Skip to content
wiryaaods
/
LAB-PW-2022
Public
forked from Muhthoriqas/LAB-PW-2022
Code
Pull requests
Actions
Projects
Wiki
Security
More
LAB-PW-2022/H071211048/PRAKTIKUM-8/resources/views/tampilData.blade.php
@wiryaaods
wiryaaods tugas 8 praktikum
 History
 1 contributor
59 lines (55 sloc)  2.5 KB
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
            <form action="/product/update/{{$singleData->id}}" method="POST">
                @csrf
                <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id" name="id">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">nama produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value = "{{$singleData->name}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="seller_id" class="col-sm-2 col-form-label">seller</label>
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
                        <label for="category_id" class="col-sm-2 col-form-label">kategori</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="category_id" name="category_id">
                                <option selected disabled>pilih kategori
                                @foreach($kategori as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" name="price" value = "{{$singleData->price}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status" value = "{{$singleData->status}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
    
</body>
</html>