<?php 
// File ini berfungsi untuk membuat database dan table jika tidak ada dan menghubungkan ke database 
$servername = "localhost";
$database = "mahasiswa";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    // die("Connection failed: " . mysqli_connect_error());
} else {}
$sql = "CREATE DATABASE IF NOT EXISTS $database";
$conn->query($sql);

$conn->close();

//create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {}

$sql = "CREATE TABLE IF NOT EXISTS `datamahasiswa` (
    `nim` varchar(255) NOT NULL DEFAULT 'H071211004',
    `nama` varchar(255) NOT NULL DEFAULT 'Arif',
    `alamat` varchar(255) NOT NULL DEFAULT 'Makassar',
    `fakultas` varchar(255) NOT NULL DEFAULT 'MIPA',
    `id` int(11) NOT NULL,
    PRIMARY KEY (`id`))";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `email` varchar(255) NOT NULL,
    `pass` varchar(255) NOT NULL,
    `rank` varchar(255) NOT NULL DEFAULT 'member',
    PRIMARY KEY (`email`))";
$conn->query($sql);
?>