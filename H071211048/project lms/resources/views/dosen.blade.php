@extends ('layouts.main')

@section('container')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 style="text-align: center;" class="data mt-3 mb-3">data dosen</h1>
            <div class= "container">
                <a href="/tambahDataDosen" class="btn btn-success mb-2">tambah data</a>
                    <div class="row g-3 align-items-center my-2">
                        <div class="col-auto">
                            <form action="/dosen" method="GET">
                            <input type="search" id="inputData" name= "search" class="form-control" 
                                autofocus = "true" value = "{{$data}}">
                            </form>
                        </div>
                    </div>
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
                                <th scope="col">NIP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Foto</th>
                                <th scope="col">No HP</th>
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
                                    <td>{{$row->nip}}</td>
                                    <td>{{$row->alamat}}</td>
                                    <td>
                                        <img src="{{asset('fotoDosen/'.$row-> foto)}}" alt="" style="width:40px;">
                                    </td>
                                    <td>{{$row->no_hp}}</td > 
                                    <td>
                                        <a href="/tampilkanDataDosen/{{$row->id}}" type="button" class="btn btn-warning">Edit</a>
                                        <a href="/hapusDataDosen/{{$row->id}}"  type= "button" class="btn btn-danger hapusData" data-id="{{$row->id}}"
                                            data-nama="{{$row->nama}}">Delete</a>
                                    </td>
                            </tr>
                                @endforeach    
                        </tbody>
                        </table>
                            {{$data->links()}}
                    </div>
            </div>
        </div>        
    </main>
</div>
@endsection
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script> -->

</body>
</html>