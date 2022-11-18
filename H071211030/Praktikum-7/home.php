<?php
include_once './includes/db.inc.php';

if (!$user->is_logged_in()) {
    $user->redirect('index.php');
}

try {
    $sql = "SELECT * FROM users WHERE user_id=:user_id";

    $query = $db_conn->prepare($sql);

    $query->bindParam(':user_id', $_SESSION['user_session']);

    $query->execute();

    $returned_row = $query->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    array_push($errors, $e->getMessage());
}

if (isset($_GET['logout']) && ($_GET['logout'] == 'true')) {
    $user->log_out();
    $user->redirect('index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP PHP - Home</title>
</head>
<body>
    <h1>Home</h1>

    <p>Welcome, <?= $returned_row['user_name']; ?>. <a href="?logout=true">Log out</a></p>
    <p><a href="indexcrud.php">Student CRUD</a>
</body>
</html>