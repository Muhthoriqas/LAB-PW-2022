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
        <li class="nav-item">
            <a class="nav-link">
                <button class="btn btn-outline-dark">
                    <i class="bi bi-person-add"></i>
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
                                <th scope="col">Kode</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">SKS</th>
                                <th scope="col">Limit</th>
                                <th scope="col">Jadwal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr scope="row">
                                <th scope="row">1</th>
                                <td>21H07120402</td>
                                <td><a href="#">Sistem Basis Data I</a></td>
                                <td>2</td>
                                <td>41/50</td>
                                <td>Rabu, 10.10-13.45</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i
                                            class="bi bi-pencil-fill"></i>Edit</button>
                                    <button type="button" class="btn btn-danger"><i
                                            class="bi bi-trash-fill"></i>Delete</button>
                                    <button type="button" class="btn btn-primary"><i
                                            class="bi bi-plus-square"></i> Add</button>
                                </td>
                            </tr>
                            <tr class="table_spacer">
                                <td colspan="10"></td>
                            </tr>
                            <tr scope="row">
                                <th scope="row">2</th>
                                <td>21H07120602</td>
                                <td><a href="#">Pemrograman Web</a></td>
                                <td>2</td>
                                <td>30/50</td>
                                <td>Senin, 16.15-17.55</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i
                                            class="bi bi-pencil-fill"></i>Edit</button>
                                    <button type="button" class="btn btn-danger"><i
                                            class="bi bi-trash-fill"></i>Delete</button>
                                    <button type="button" class="btn btn-primary"><i
                                            class="bi bi-plus-square"></i> Add</button>
                                </td>
                            </tr>
                            <tr class="table_spacer">
                                <td colspan="10"></td>
                            </tr>
                            <tr  style="background-color: lightcoral" scope="row">
                                <th scope="row">3</th>
                                <td>21H07120303</td>
                                <td><a href="#">Struktur Data</a></td>
                                <td>3</td>
                                <td>50/50</td>
                                <td>Senin, 07.30-09.10</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i
                                            class="bi bi-pencil-fill"></i>Edit</button>
                                    <button type="button" class="btn btn-danger"><i
                                            class="bi bi-trash-fill"></i>Delete</button>
                                    <button type="button" class="btn btn-primary"><i
                                            class="bi bi-plus-square"></i> Add</button>
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
