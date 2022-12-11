<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel - @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .card {
      font-size: 14px;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .container {
      width: auto;
      margin-top: 100px;
    }

    body {
      height: 100%;
    }
  </style>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background : #dcdcdc">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </li>
          <li class="nav-item">
            <a class="nav-link active-color" aria-current="page" href="/product">PRODUCT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/category">CATEGORY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/seller">SELLER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/permission">PERMISSION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/sellerPermission">SELLER PERMISSION</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <div class="container">
    @yield('container')

  </div>

</body>

</html>