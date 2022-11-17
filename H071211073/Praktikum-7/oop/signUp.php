<?php 
include 'functions.php';
if($_POST) {
    $auth->register($conn); // mengecek apakah sudah mengsubmit dengan melihat variabel post apakah ada atau tidak
} else {
    echo 'gagal';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
            crossorigin="anonymous">
    <title>Sign Up</title>
</head>

<body>
    <div class="my-5 mx-5">

        <div class="card mb-3 p-5">

            <div class="row g-0">
                <div class="col-md-4">
                <img src="img/logo.gif" class="img-fluid rounded-start" alt="pixel logo">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">Sign Up</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Sign Up to register account</h6>
                    <p class="card-text">Have an account already?
                    <a href="index.php" class="card-link">Let's log in</a>
                    </p>
                    
                    <div>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="emails" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emails" name="email"
                                        aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pass" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>