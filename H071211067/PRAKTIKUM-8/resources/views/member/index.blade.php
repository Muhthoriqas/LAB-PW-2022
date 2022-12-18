@extends('layout.template');

@section('konten')

<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">

    <!-- FORM PENCARIAN -->
    <div class="pb-3">
    <form class="d-flex" action="/" method="get">
        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Cari</button>
    </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
    <a href='{{ url('/create') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">ID Member</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Alamat</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem(); ?>

            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->member }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>
                    <a href='{{ url('/edit/'.$item->member) }}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')"class='d-inline'action="{{ url('/destroy/'.$item->member) }}" method="get">
                        @csrf
                        @method('delete')

                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                    
                </td>
            </tr>

            <?php $i++ ?>
            @endforeach
            
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
</div>
<!-- AKHIR DATA -->

@endsection