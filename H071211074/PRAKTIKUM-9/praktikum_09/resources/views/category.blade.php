@extends('layouts.main')

@section('title', 'Category')

@section('container')

<!-- Button Tambah Data -->
<button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background : #191919">
    Tambah data +
</button>

<!-- Modal tambah data-->
<div class=" modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/category/add" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status" value="" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="simpan" value="Simpan Data" class="btn add" data-id="nim" style="color : white; background : #191919;" />
            </div>
        </div>
    </div>
</div>
<!-- End Modal Tambah -->

<div class="card">
    <div class="card-header text-white" style="background : black">
        DATA CATEGORY
    </div>
    <div class="card-body">

        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = ($data->currentpage()-1)*$data->perpage()+1;
                @endphp
                @foreach($data as $row)
                <tr>
                    <td scope="row">{{$i++}}</td>
                    <td scope="row">{{$row->name}}</td>
                    <td scope="row">{{$row->status}}</td>
                    <td scope="row">{{$row->created_at}}</td>
                    <td scope="row">{{$row->updated_at}}</td>
                    <td scope="row">

                        <a href="/category/edit/{{$row->id}}"><button type="button" class="btn" style="color : white; background : black; margin-bottom:5px ">Edit</button></a>
                        <a href="/category/delete/{{$row->id}}"><button type="button" class="btn" style="color : white; background : black; margin-bottom:5px">Delete</button></a>


                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</div>
<div class="pagination justify-content-center">
    {{ $data->links() }}
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>