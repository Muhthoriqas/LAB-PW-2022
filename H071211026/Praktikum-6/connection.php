<?php
$con = new mysqli('localhost', 'root', '', 'php6');

if(!$con){
   die(mysqli_error($con));
}
?>