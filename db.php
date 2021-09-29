<?php
    # This is the database connection file.
    $server_name = "localhost";
    $username = "wd_project";
    $password = "12345";
    $db_name = "wd_project";
    $db = new mysqli($server_name, $username, $password, $db_name);
    if ($db->connect_error) {
        die("Database Error!\n" . $db->connect_error);
    }
?>