<?php
    if(!isset($_SESSION['enrollment']) && !isset($_SESSION['logged_in'])){
        header("location: ./Login.php");
    }
?>