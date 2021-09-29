<?php include("../db.php")?>
<?php
    # Getting the request variables.
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $enrollment = $_POST['enrollment'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    # Executing the SQL Query.
    $new_user_query = "INSERT INTO `user`(`fname`, `mname`, `lname`, `enrollment`, `mobile`, `email`, `password`, `isDeleted`) VALUES ('".$fname."','".$mname."','".$lname."','".$enrollment."','".$mobile."','".$email."','".$password."',0)";
    if($db->query($new_user_query) == TRUE){
        header('location:../Login.php');
    }
    else{
        header('location:../index.php?error=1');
    }
?>