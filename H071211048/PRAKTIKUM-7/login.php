<?php

require 'functions.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

$login = new Login();

if (isset($_POST["submit"])) {
  $result = $login->login($_POST["email"], ($_POST["password"]));

  if ($result == 1) {
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
  } elseif ($result == 10) {
    echo
    "<script> alert('email/password salah'); </script>";
  } elseif ($result == 100) {
    echo
    "<script> alert('User not registered'); </script>";
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
        <h3>login</h3>
        <input type="email" name = "email" required placeholder = "enter your email">
        <input type="password" name = "password" required placeholder = "enter your password">
        <input type="submit" name = "submit" value="login" class= "form-btn">
        <p>dont have account?
            <a href="register.php">register now</a>
        </p>
    </form>
</div>

</body>
</html>