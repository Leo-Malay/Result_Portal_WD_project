<?php include('../db.php') ?>
<?php
    # Getting the request variables.
    $enrollment = $_POST['enrollment'];
    $password = $_POST['password'];

    # Executing the query.
    $login_query = "SELECT `fname`,`mname`,`lname` FROM `user` WHERE `enrollment` = '".$enrollment."' AND `password` = '".$password."' AND `isDeleted` = 0";
    $result =  $db->query($login_query)->fetch_assoc();
    if($result != ""  && mysqli_num_rows($db->query($login_query)) == 1){
        header('location:../index.php');
    }else{
        echo "1 ".strval($result);
        header('location:../Login.php?error=2');
    }
?>