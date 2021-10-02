<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" href="./CSS/general.css">
    <link rel="stylesheet" href="./CSS/head_foot.css">
</head>
<body>
    <?php include("./components/header.php")?>
    <div class="card">
        <p id="title">New User</p>
        <form action="./api/register.php" method="post">
            <input type="text" name="fname" id="" placeholder="First Name" required><br>
            <input type="text" name="mname" id="" placeholder="Middle Name" required><br>
            <input type="text" name="lname" id="" placeholder="Last Name" required><br>
            <input type="number" name="enrollment" id="enrollment" placeholder="Enrollment" step=0 required><br>
            <input type="number" name="mobile" id="" placeholder="Mobile" step=0 required><br>
            <input type="text" name="email" id="" placeholder="Email" required><br>
            <input type="password" name="password" id="password"  placeholder="Password" required><br>
            <input type="submit" value="Submit">
            <a href="./Login.php"><input type="button" value="Already Have Account?"></a>
        </form>
    </div>
    <?php include("./components/footer.php")?>
</body>
</html>