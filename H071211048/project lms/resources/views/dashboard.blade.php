@extends('layouts.main')

@section('container')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <hr>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-body bg-primary text-white mb-4">
                                    <label>mahasiswa</label>
                                    <h1>{{$totalMahasiswa}}</h1>
                                    <a href="{{url('mahasiswa')}}" class="text-white">view</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-body bg-danger text-white mb-4">
                                    <label>dosen</label>
                                    <h1>{{$totalDosen}}</h1>
                                    <a href="{{url('dosen')}}" class="text-white">view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        @endsection
    </body>
</html>