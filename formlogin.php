<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <h1>Login</h1>
        <form action="login.php" method="post">
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password">
        </div>
        <button type="submit" name="login" class="btn" value="Login">Login</button>
        </form>
    </div>
</body>
</html>
