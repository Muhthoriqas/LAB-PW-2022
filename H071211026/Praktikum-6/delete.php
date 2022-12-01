<?php
include 'connection.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from library where id = $id";
    $result = mysqli_query($con, $sql);

    // echo "Deleted Succesfully";
    header('location:display.php');

}
else{
   die(mysqli_error($con));

}

?>