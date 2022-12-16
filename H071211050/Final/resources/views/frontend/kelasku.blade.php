@extends('template.fenavbar')

@section('title', $title)

@section('content')
<br> <br>
<nav class="navbar navbar-expand">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <button class="btn btn-outline-dark">
                    <i class="fas fa-bars"></i>
                </button>
            </a>
        </li>
    </ul>
</nav>

<!-- Main content -->
<section class="content">
    <div class="container pt-4">
        {{-- Content --}}
        <div class="container">
            <h1><strong>Daftar Kelasku</strong></h1>
        </div>

        <div class="table_content">
            <div class="container">
                <div class="table-responsive custom-table-responsive px-2">
                    <table class="table custom-table">
                        <thead>
                            <br>
                            <tr class="bg-secondary head_table">
                                <th scope="col">No</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Tahun ajaran</th>
                                <th scope="col">Limit</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr scope="row">
                                <th scope="row">1</th>
                                <td>Sistem Basis Data I A</td>
                                <td><a href="#">Sistem Basis Data I</a></td>
                                <td>2021/2022</td>
                                <td>41/50</td>
                                <td>Prof.Ikram</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i
                                            class="bi bi-pencil-fill"></i>Edit</button>
                                    <button type="button" class="btn btn-danger"><i
                                            class="bi bi-trash-fill"></i>Delete</button>
                                </td>
                            </tr>
                            <tr class="table_spacer">
                                <td colspan="10"></td>
                            </tr>
                            <tr scope="row" class="row_table">
                                <th scope="row">2</th>
                                <td>Pemrograman Web A</td>
                                <td><a href="#">Pemrograman Web</a></td>
                                <td>2021/2022</td>
                                <td>30/50</td>
                                <td>Ir.Hasan</td>
                                <td>
                                    <button type="button" class="btn btn-warning sm"><i
                                            class="bi bi-pencil-fill"></i>Edit</button>
                                    <button type="button" class="btn btn-danger sm"><i
                                            class="bi bi-trash-fill"></i>Delete</button>
                                </td>
                            </tr>
                            <tr class="table_spacer">
                                <td colspan="10"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
@endsection
