<?php
$con = new mysqli('localhost', 'root', '', 'php7');

if(!$con){
   die(mysqli_error($con));
}
?>