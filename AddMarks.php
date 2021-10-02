<?php session_start();?>
<?php include("./db.php")?>
<?php include("./api/verified.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Marks</title>
    <link rel="stylesheet" href="./CSS/general.css">
    <link rel="stylesheet" href="./CSS/AddMarks.css">
    <link rel="stylesheet" href="./CSS/head_foot.css">
</head>
<body>
    <?php include("./components/header.php")?>
    <center>
        <form action="./api/addmarks.php" method="POST">
        <?php
        if(isset($_GET['enrollment'])){
            echo '<input type="text" name="enrollment" id="enrollment" placeholder="Enrollment" value="'.$_GET['enrollment'].'" style="width:280px;" required><br>';
        }
        else{
            echo '<input type="text" name="enrollment" id="enrollment" placeholder="Enrollment" value="" style="width:280px;" required><br>';
        }
        ?>
        <?php
        $get_subjects = 'SELECT * FROM `subject`';
        $result =  $db->query($get_subjects);
        while($row = mysqli_fetch_array($result)) {
                echo '<div class="subject">';
                echo '<input type="text" name="code" id="'.$row["code"].'" placeholder="Subject Code" value="'.$row["code"].'" disabled>';
                echo '<input type="text" name="subject_name" id="'.$row["subject"].'" placeholder="Subject Name" value="'.$row["subject"].'" style="width:230px;" disabled><br>';
                echo '<input type="text" name="'.$row["code"].'_TE" id="'.$row["code"].'_TE" placeholder="E" step=1  required>';
                echo '<input type="text" name="'.$row["code"].'_TI" id="'.$row["code"].'_TI" placeholder="I" step=1 required>';
                echo '<input type="text" name="'.$row["code"].'_TV" id="'.$row["code"].'_TV" placeholder="V" step=1 required>';
                echo '<input type="text" name="'.$row["code"].'_T" id="'.$row["code"].'_T" placeholder="Theory Total" step=1 required style="width: 120px"><br>';
                echo '<input type="text" name="'.$row["code"].'_PI" id="'.$row["code"].'_PI" placeholder="I" step=1 required>';
                echo '<input type="text" name="'.$row["code"].'_PV" id="'.$row["code"].'_PV" placeholder="V" step=1 required>';
                echo '<input type="text" name="hidden" id="" placeholder="" style="opacity:0;cursor: default;" step=1 required>';
                echo '<input type="text" name="'.$row["code"].'_P" id="'.$row["code"].'_P" placeholder="Practical total" step=1 required style="width: 120px"><br>';
                echo '</div>';
        }
        ?>
        <center>
            <input type="submit" value="Add" style="width: 308px;">
        </center>
        </form>
    </center>
    <?php include("./components/footer.php")?>
</body>
</html>