<?php 
// Session dimulai baru di hilangkan semua isinya baru pindah ke index.php
session_start();
session_unset();
session_destroy();
header("Location: index.php");
?>