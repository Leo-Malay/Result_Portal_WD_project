<div class="header">
    <img src="./IMG/ADIT_default.png" alt="ADIT" style="width: 100%">
    <ul class="nav_ls">
        <a href="/wd_project/"><li>Home</li></a>
        <a href="/wd_project/GetResult.php"><li>Result</li></a>
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE){
                echo '<a href="/wd_project/api/Logout.php"><li>LogOut</li></a>';
            }
            else{
                echo '<a href="/wd_project/NewUser.php"><li>Register</li></a><a href="/wd_project/Login.php"><li>Login</li></a>';
            }
        ?>
    </ul>
</div>