<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<ul class="nav justify-content-center">
  <li class="nav-item active">
    <a class="nav-link" href="/categories">Category</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="/products">Product</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="/permissions">Permission</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="/sellers">Seller</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="/sellers_permissions">Seller Permission</a>
  </li>
</ul>

<div class="container">
    @yield('content')
</div>
  
</body>
</html>