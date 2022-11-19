<?php
require 'function.php';
if(!empty($_SESSION["id"])) {

}
$register = new registration();
if(isset($_POST["submit"])) {
   $username = $_POST["username"];
   $password = $_POST ["password"];
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
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>

      <input type="text" name="username" required placeholder="enter your username">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>