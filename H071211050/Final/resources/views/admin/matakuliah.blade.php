@extends('template.layout')

@section('title', 'Mata Kuliah')

@section('content')
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
            <h1><strong>Daftar Mata Kuliah</strong></h1>
        </div>

        <div class="table_content">
            <div class="container">
                <div class="table-responsive custom-table-responsive px-2">
                    <table class="table custom-table">
                        <thead>
                            <br>
                            <tr class="bg-dark head_table">
                                <th scope="col">No</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Foto</th>
                                <th scope="col">No Telepon</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr scope="row">
                                <th scope="row">1</th>
                                <td>1392</td>
                                <td><a href="#">James Yates</a></td>
                                <td>
                                    Web Designer
                                    <small class="d-block">Far far away, behind the word mountains</small>
                                </td>
                                <td>+63 983 0962 971</td>
                                <td>NY University</td>
                                <td>2021</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i
                                            class="bi bi-pencil-fill"></i></button>
                                    <button type="button" class="btn btn-danger"><i
                                            class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>
                            <tr class="table_spacer">
                                <td colspan="10"></td>
                            </tr>
                            <tr scope="row" class="row_table">
                                <th scope="row">2</th>
                                <td>1392</td>
                                <td><a href="#">James Yates</a></td>
                                <td>
                                    Web Designer
                                    <small class="d-block">Far far away, behind the word mountains</small>
                                </td>
                                <td>+63 983 0962 971</td>
                                <td>NY University</td>
                                <td>2021</td>
                                <td>
                                    <button type="button" class="btn btn-warning sm"><i
                                            class="bi bi-pencil-fill"></i></button>
                                    <button type="button" class="btn btn-danger sm"><i
                                            class="bi bi-trash-fill"></i></button>
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
