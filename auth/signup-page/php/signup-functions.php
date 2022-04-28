<?php

function emptyInputSignup(
    $username, $firstName, $lastName, $email, $password, $rePassword ){
    
    $result=null; 
    if(empty($username)||empty($firstName)||empty($lastName)||
    empty($email)||empty($password)||empty($rePassword)){
        $result = true;

    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username){
    $result=null;
    
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function invalidFirstName($firstName){
    $result=null;

    if(!preg_match("/^[a-zA-Z]*$/",$firstName)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidLastName($lastName){
    $result=null;

    if(!preg_match("/^[a-zA-Z]*$/",$lastName)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result=null;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidPassword($password, $rePassword){
    $result=null;

    if($password !== $rePassword){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE userUsername = ? OR 
    userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index-signup.php?error=usernametakenfnc");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $firstName, $lastName, 
$email, $password) {
    $sql = "INSERT INTO users (userUsername, userFirstName, userLastName, userEmail, userPassword) 
    VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index-signup.php?error=stmtfailed");
        exit();
    }

    $hashedPass = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss", $username, $firstName, $lastName, $email, $hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../index-signup.php?error=none");
    //header("location: ../../login-page/login.html");
    exit();


}