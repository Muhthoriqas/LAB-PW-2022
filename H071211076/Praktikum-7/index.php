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
    <title>Document</title>
</head>

<body>
    <h1>Welcome <?php echo $user["username"]; ?></h1>
    <a href="logout.php">Logout</a>
    <a href="pendo.php">Insert Data</a>
</body>

</html>