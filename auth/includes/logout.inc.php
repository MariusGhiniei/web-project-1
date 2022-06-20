<?php
    session_start();
    session_unset();
    session_destroy();
    $_SESSION["loggedin"] = false;
    setcookie("loggedin", false, time() + (86400 * 30), "/");
    

    header("location: ../../index-home-page.php?error=none");



?>