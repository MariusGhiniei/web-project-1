<?php

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $pass = $_POST["password"];

    require_once '../../signup-page/php/dbh.inc.php';
    require_once 'login-functions.php';

    if(emptyInputLogin($username, $pass) !== false){
        header("location: ../index-login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pass);

} else {
    header("location: ../index-home-page.html");
    exit();
}

