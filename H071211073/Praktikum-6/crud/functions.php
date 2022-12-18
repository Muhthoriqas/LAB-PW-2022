<?php
$servername = "localhost";
$database = "mahasiswa";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
// echo "Connected Succesfully";
}
?>