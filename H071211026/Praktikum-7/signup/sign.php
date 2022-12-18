<?php
$user = 0;
$success = 0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from registration where Username = '$username'";
    $result = mysqli_query($con, $sql);

    if($result){
        $num = mysqli_num_rows($result);
        if($num >0){
          $user = 1;
        }
    }
    else{
        $sql = "insert into `registration` (Username, Password)
        values('$username', '$password')";

        $result = mysqli_query($con, $sql); 

        if($result){  
          $success = 1;
        }
        else{
          die(mysqli_error($con));
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
    <title>Sign Up Page</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<?php

if($user){
  echo "Sorry, Username already taken";
}
else if ($success){
  echo "Sign up success!";
  header('location : login.php');
}

?>
<h1>DAFTAR DULU</h1>
<br>
<form action="sign.php" method= "post">
<div class="mb-3 col-6">
    <label class="form-label">Useranme</label>
    <input type="text" name= "username" placeholder="username" class="form-control" required>
  </div>
  <div class="mb-3 col-6">
    <label class="form-label">Password</label>
    <input type="password" name="password" placeholder="password" class="form-control" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </tbody>
</table>
</body>
</html>