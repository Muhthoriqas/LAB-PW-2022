<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
	header("Location: login.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title>Register Now</title>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="http://localhost/tugass7/style.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card cardd">
			<div class="card-header">
				<h3>Register</h3>
			</div>
			<div class="card-body">
				<form method="post" action="" autocomplete="off">
                	<div class="input-group form-group">
						<div class="input-group-prepend">
							<span for="" class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="name" required value="" class="form-control" placeholder="Nama"> <br>
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span for="" class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" required value="" class="form-control" placeholder="Username"> <br>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span for="" class="input-group-text"><i class="fas fa-email"></i></span>
						</div>
						<input type="email" name="email" required value="" class="form-control" placeholder="Email"> <br>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span for="" class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" required value="" class="form-control" placeholder="Password"> <br>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span for="" class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="confirmpassword" required value="" class="form-control" placeholder="Confirm Password"> <br>
					</div>
					<div class="form-group">
						<input name="submit" type="submit" value="Register" class="btn float-right login_btn">
					</div>
					<br>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>