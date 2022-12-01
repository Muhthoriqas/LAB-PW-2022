<?php
$login = 0;
$invalid = 0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from registration where Username = '$username' and Password = '$password'";
    $result = mysqli_query($con, $sql);

    if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){
          $login = 1;
          
    }
        else{
            $invalid = 1;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login Page</title>
</head>
<body>
<?php

if($login){
  session_start();
  $_SESSION['username'] = $username;
  header('location:display.php');
}
else if ($invalid){
  echo "Wrong username or password";
}

?>
<h1>LOGIN DULU</h1>
<br>
<form action="login.php" method= "post">
  <div class="mb-3 col-6">
    <label class="form-label">Useranme</label>
    <input type="text" name= "username" placeholder="username" class="form-control" required>
  </div>
  <div class="mb-3 col-6">
    <label class="form-label">Password</label>
    <input type="password" name="password" placeholder="password" class="form-control" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <button class="btn btn-primary"><a href="sign.php" style="color: white;">Sign Up</a></button>
</form>
  </tbody>
</table>
</body>
</html>