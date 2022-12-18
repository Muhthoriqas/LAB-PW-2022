@extends ('layouts.main')

@section('container')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 style="text-align: center;" class="data mt-3 mb-3">data mahasiswa</h1>
                <div class= "container">
                    <a href="/tambahDataMahasiswa" class="btn btn-success mb-2">tambah data</a>
                        <div class="row g-3 align-items-center my-2">
                            <div class="col-auto">
                                <form action="/mahasiswa" method="GET">
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
                                        <th scope="col">NIM</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">Angkatan</th>
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
                                        <td>{{$row->nim}}</td>
                                        <td>{{$row->alamat}}</td>
                                        <td>
                                            <img src="{{asset('fotoMahasiswa/'.$row-> foto)}}" alt="" style="width:40px;">
                                        </td>
                                        <td>{{$row->no_hp}}</td > 
                                        <td>{{$row->tahun_masuk}}</td>
                                        <td>
                                            <a href="/tampilkanData/{{$row->id}}" type="button" class="btn btn-warning">Edit</a>
                                            <a href="/hapusData/{{$row->id}}"  type= "button" class="btn btn-danger hapusData" data-id="{{$row->id}}"
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

</body>
</html>