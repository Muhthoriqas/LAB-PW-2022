<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: home.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: home.php");
  }
  else if($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  else if($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <style>
        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: #966c6c;
            border: none;
            border
        }
        #box {
            font-family: 'Cinzel Decorative', cursive;
            background-color: #BC8F8F;
            margin: auto;
            box-shadow: 5px 5px 10px 5px #987474;
            width: 25%;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="center" id="box">
         <form method="post">
            <div style="font-size: 40px; margin: 10px; color: white; text-align: center;">Login</div>
            <label for="usernameemail" class="form-label">Username or Email</label>
            <input id="text" type="text" name="usernameemail"><br><br>
            <label for="password" class="form-label">Password</label>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="login" name="submit"><br><br>
            <p>Belum punya akun? <a href="registration.php">Signup</a><br><br></p>
        </form>
    </div>
</body>
</html>