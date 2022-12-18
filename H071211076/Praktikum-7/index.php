<?php
require 'function.php';

$select = new select();
if (!empty($_SESSION["id"])) {
    $user = $select->select($_SESSION["id"]);
} else {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
 
    <br><h3>Welcome <?php echo $user["username"]; ?></h3>
    <a class="btn btn-danger" href="logout.php" role="button">Logout</a>
    <a class="btn btn-primary" href="pendo.php" role="button">Insert Data</a>
    <!-- <a href="logout.php">Logout</a> -->
    <!-- <a href="pendo.php">Insert Data</a> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>