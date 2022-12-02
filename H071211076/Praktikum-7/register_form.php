<?php
require 'function.php';
if (!empty($_SESSION["id"])) {
}
$register = new registration();
if (isset($_POST["submit"])) {
   $username = $_POST["username"];
   $password = $_POST["password"];
   $result = $register->registration($username, $password);

   if ($result == 1) {
      header("location: login.php");
   } else {
      echo "Username already exist";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <div class="col-sm-3 col-form-label ms-5">
      <form action="" method="post">
         <br><h3>Register</h3><br>
         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" requierd placeholder="Enter Username">
         </div>
         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" required placeholder="Enter Password">
         </div>
         <!-- <input type="text" name="username" required placeholder="enter your username"> -->
         <!-- <input type="password" name="password" required placeholder="enter your password"> -->
         <!-- <input type="submit" name="submit" value="register now" class="form-btn"> -->
         <button type="submit" name="submit" value="register now" class="btn btn-primary mb-3">Register Now</button>
         <p>already have an account? <a href="login.php">login now</a></p>
      </form>

   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>