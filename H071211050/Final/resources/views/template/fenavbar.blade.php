<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../dist/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark pri-navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <i class="bi bi-building"></i>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link {{ ($title === 'Homepage') ? 'navmenu-active' : '' }}" href="/">Homepage</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link {{ ($title === 'Daftar Kelas') ? 'navmenu-active' : '' }}" href="/daftarkelas">Daftar Kelas</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link {{ ($title === 'Kelasku') ? 'navmenu-active' : '' }}" href="/kelasku">Kelasku</a>
                    </li>
                </ul>
                <div class="py-1"></div>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="/loginmahasiswa" class="nav-link d-flex p-0">
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-box-arrow-left"></i> &nbsp;Logout
                            </button>
                        </a>
                    </li>
                </ul>
                <div class="py-1"></div>
            </div>
        </div>
    </nav>
    {{-- main content --}}
    @yield('content')
    {{-- end main content --}}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
