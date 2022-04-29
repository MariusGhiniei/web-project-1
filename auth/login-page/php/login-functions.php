<?php

require_once '../../signup-page/php/signup-functions.php';
function emptyInputLogin($username, $pass){
    $result = null;

    if(empty($username)||empty($pass)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function loginUser($conn, $username, $pass) {
    $usernameExists = usernameExists($conn, $username, $username);

    if($usernameExists == false) {
        header("location: ../../index-home-page.html?error=wronglogin");
        exit();
    }

    $passHashed = $usernameExists["usersPassword"];
    $checkPass = password_verify($pass, $passHashed);

    if($checkPass === false) {
        header("location: ../../index-home-page.html?error=wronglogin");
        exit();
    }
    else if($checkPass === true) {
        session_start();
        $_SESSION["userid"] = $usernameExists["usersId"];
        $_SESSION["userusername"] = $usernameExists["userUsername"];
        
        header("location: ../../index-home-page.html");
        exit();
    }
}