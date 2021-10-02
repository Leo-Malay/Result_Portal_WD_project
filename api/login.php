<?php include('../db.php') ?>
<?php
    session_start();
    # Getting the request variables.
    $enrollment = $_POST['enrollment'];
    $password = $_POST['password'];
    # Executing the query.
    $login_query = "SELECT `fname`,`mname`,`lname` FROM `user` WHERE `enrollment` = '".$enrollment."' AND `password` = '".$password."' AND `isDeleted` = 0";
    $result =  $db->query($login_query)->fetch_assoc();
    if($result != ""  && mysqli_num_rows($db->query($login_query)) == 1){
        $_SESSION['enrollment'] = $enrollment;
        $_SESSION["logged_in"] = TRUE;
        header('location:../AddMarks.php');
    }else{
        header('location:../Login.php?error=2');
        session_destroy();
    }
?>