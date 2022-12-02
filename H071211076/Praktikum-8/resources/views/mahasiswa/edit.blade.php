@extends('layout.template')
<!-- START FORM -->
@section('konten')
    
 <form action='{{ url('mahasiswa/'.$data->nim) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('mahasiswa') }}' class="btn btn-secondary"> Kembali</a>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    {{-- {{ $data->nim }} --}}
                    <input type="text" class="form-control" name='nim' value="{{ $data->nim }}" id="nim">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jurusan' value="{{ $data->jurusan }}" id="jurusan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Simpan</button></div>
            </div>
        </div>
    </form> 
        <!-- AKHIR FORM -->
    @endsection