<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" href="./CSS/general.css">
</head>
<body>
    <form action="./api/register.php" method="post">
        <input type="text" name="fname" id="" placeholder="First Name"><br>
        <input type="text" name="mname" id="" placeholder="Middle Name"><br>
        <input type="text" name="lname" id="" placeholder="Last Name"><br>
        <input type="number" name="enrollment" id="enrollment" placeholder="Enrollment" step=0><br>
        <input type="number" name="mobile" id="" placeholder="Mobile" step=0><br>
        <input type="text" name="email" id="" placeholder="Email"><br>
        <input type="password" name="password" id="password"  placeholder="Password"><br>
        <input type="submit" value="Submit">
        <a href="./Login.php"><input type="button" value="Already Have Account?"></a>
    </form>
</body>
</html>