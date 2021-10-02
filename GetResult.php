<?php session_start();?>
<?php include("./db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="./CSS/general.css">
    <link rel="stylesheet" href="./CSS/result.css">
    <link rel="stylesheet" href="./CSS/head_foot.css">
</head>
<body>
    <?php include("./components/header.php")?>
    <div class="card">
        <p id="title">Result</p>
        <form action="./Result.php" method="POST">
            <input type="text" name="enrollment" id="enrollment" placeholder="Enrollment"  required>
            <input type="Submit" value="Go">
        </form>
    </div>
    <?php include("./components/footer.php")?>
</body>
</html>