<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <form action="/login" method="POST">
        @csrf
        <label for="email">Email : </label><br><br>
        <input type="email" name="email" id="email" placeholder="example@email.com" required autofocus><br><br>
        <label for="password">Password : </label><br><br>
        <input type="password" name="password" id="password" required><br><br> 
        <input type="submit" value="Login">
    </form>
    
</body>
</html>