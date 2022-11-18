<?php
require_once('./includes/db.inc.php');

if ($user->is_logged_in()) {

    $user->redirect('home.php');
}

if (isset($_POST['log_in'])) {

    $user_name = trim($_POST['user_name_email']);
    $user_email = trim($_POST['user_name_email']);
    $user_password = trim($_POST['user_password']);

    if (empty($user_name) || empty($user_email)) {
        array_push($errors, "Please enter a valid username or e-mail address");
    } elseif (empty($user_password)) {
        array_push($errors, "Please enter a valid password.");
    } else {

        if ($user->login($user_name, $user_email, $user_password)) {

            $user->redirect('home.php');
        } else {
            array_push($errors, "Incorrect log-in credentials.");
        }
    }
}

if (isset($_POST['register'])) {

    $user_name = trim($_POST['user_name']);
    $user_email = trim($_POST['user_email']);
    $user_password = trim($_POST['user_password']);

    if (empty($user_name)) {
        array_push($errors, "Please enter a valid username.");
    } elseif (empty($user_email)) {
        array_push($errors, "Please enter a valid e-mail address.");
    } elseif (empty($user_password)) {
        array_push($errors, "Please enter a valid password.");
    } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Please enter a valid e-mail address.");
    } else {
 
            $sql = "SELECT user_name, user_email FROM users WHERE user_name=:user_name OR user_email=:user_email";

            $query = $db_conn->prepare($sql);

            $query->bindParam(':user_name', $user_name);
            $query->bindParam(':user_email', $user_email);

            $query->execute();

            $returned_clashes_row = $query->fetch(PDO::FETCH_ASSOC);

            if ($returned_clashes_row['user_name'] == $user_name) {
                echo "That username is taken. Please choose something different.";
            } elseif ($returned_clashes_row['user_email'] == $user_email) {
                echo "That e-mail address is taken. Please choose something different.";
            } else {
                
                if ($user->register($user_name, $user_email, $user_password)) {
                    echo "Registered";
                }
            }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP PHP - Login and Register</title>
</head>
<body>
    <h1>Welcome</h1>

    <!-- Log in -->
    <h2>Log in</h2>
    <form action="index.php" method="POST">
        <label for="user_name_email">Username or E-mail Address:</label>
        <input type="text" name="user_name_email" id="user_name_email" required>

        <label for="user_password_log_in">Password:</label>
        <input type="password" name="user_password" id="user_password_log_in" required>

        <input type="submit" name="log_in" value="Log in">
    </form>

    <!-- Register -->
    <h2>Register</h2>
    <form action="index.php" method="POST">
        <label for="user_name">Username:</label>
        <input type="text" name="user_name" id="user_name" required>

        <label for="user_email">E-mail Address:</label>
        <input type="email" name="user_email" id="user_email" required>

        <label for="user_password">Password:</label>
        <input type="password" name="user_password" id="user_password" required>

        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>