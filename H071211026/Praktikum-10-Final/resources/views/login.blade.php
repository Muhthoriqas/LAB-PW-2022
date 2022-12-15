<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
                  @if(session()->has('fail'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session('fail') }}
                  </div>
              @endif
				<form action="/login" method="post" class="login-form">
                    @csrf
		      		<div class="form-group">
		      			<input name="username" type="text" class="form-control rounded-left @error('username') is-invalid @enderror" value="{{ old('username') }}"placeholder="Username" required>
                          @error('username')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
		      		</div>
	            <div class="form-group d-flex">
	              <input name="password" type="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

