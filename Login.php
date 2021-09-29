<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/general.css">
</head>
<body>
    <form action="./api/login.php" method="post">
        <input type="text" name="enrollment" id="enrollment" placeholder="Enrollment"><br>
        <input type="text" name="password" id="password" placeholder="Password"><br>
        <input type="submit" value="Login">
        <a href="./NewUser.php"><input type="button" value="New Here?"></a>
    </form>
</body>
</html>

