<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
    echo
    "<script> alert('Registration Successful'); </script>";
    header("Location: index.php");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
    <div id="box">
         <form method="post">
            <div style="font-size: 40px; margin: 10px; color: white; text-align: center;">Signup</div>
            <label for="name" class="form-label">Name</label>
            <input id="text" type="text" name="name"><br><br>
            <label for="username" class="form-label">Username</label>
            <input id="text" type="text" name="username"><br><br>
            <label for="email" class="form-label">Email</label>
            <input id="text" type="text" name="email"><br><br>
            <label for="password" class="form-label">Password</label>
            <input id="text" type="password" name="password"><br><br>
            <label for="confirmpassword" class="form-label">Confirm Password</label>
            <input id="text" type="password" name="confirmpassword"><br><br>

            <input id="button" type="submit" value="signup" name="submit"><br><br>
            <p>Sudah punya akun? <a href="index.php">Login</a><br><br></p>
        </form>
    </div>
</body>
</html>