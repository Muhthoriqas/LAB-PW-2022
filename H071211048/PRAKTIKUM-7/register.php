<?php
require 'functions.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

$register = new Registrasi();

if (isset($_POST["submit"])) {
  $result = $register->register($_POST["name"], $_POST["email"], $_POST["password"], $_POST["confirmPassword"]);

  if ($result == 1) {
    echo
    "<script> alert('Registration Successful'); </script>";
  } elseif ($result == 10) {
    echo
    "<script> alert('Username or email has already taken'); </script>";
  } elseif ($result == 100) {
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class= "form-container">
    <form action="" method = "post">
        <h3>register now</h3>
        <input type="text" name= "name" required placeholder= "enter your name" value="">
        <input type="email" name = "email" required placeholder = "enter your email" value="">
        <input type="password" name = "password" required placeholder = "enter your password" value="">
        <input type="password" name ="confirmPassword" required placeholder = "confirm password" value= "">
        <input type="submit" name = "submit" value="register now" class= "form-btn">
        <p>already have an account?
            <a href="login.php">login</a>
        </p>
    </form>
</div>

</body>
</html>