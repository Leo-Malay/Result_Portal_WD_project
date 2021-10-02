<?php include('../db.php') ?>
<?php
    $get_subjects = 'SELECT * FROM `subject`';
    $result =  $db->query($get_subjects);
    while($row = mysqli_fetch_array($result)) {
        $insert_marks = "INSERT INTO `marks` (`code`, `enrollment`, `TE`, `TI`, `TV`, `Theory_total`, `PI`, `PV`, `Practical_total`) VALUES ('".$row['code']."', '".$_POST["enrollment"]."','".$_POST[$row['code']."_TE"]."', '".$_POST[$row['code']."_TI"]."', '".$_POST[$row['code']."_TV"]."', '".$_POST[$row['code']."_T"]."', '".$_POST[$row['code']."_PI"]."', '".$_POST[$row['code']."_PV"]."', '".$_POST[$row['code']."_P"]."')";
        $res = $db->query($insert_marks);
    }
    header("location:../AddMarks.php");
?>