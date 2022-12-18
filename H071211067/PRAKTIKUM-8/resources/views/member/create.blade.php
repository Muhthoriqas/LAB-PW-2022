@extends('layout.template');

@section('konten')



<!-- START FORM -->
<form action='{{ url('/store') }}' method='post'>
    @csrf 

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('/') }}' class="btn btn-secondary">< Kembali</a>
        <div class="mb-3 row">
            <label for="member" class="col-sm-2 col-form-label">ID Member</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='member' value="{{ Session::get('member') }}" id="member">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' value="{{ Session::get('alamat') }}" id="alamat">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Alamat" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    
    </div>
</form>
<!-- AKHIR FORM -->

@endsection