<?php


if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rePassword = $_POST["rePassword"];

    require_once './dbh.inc.php';
    require_once './signup-functions.php';

    if(emptyInputSignup($username, $firstName, $lastName, 
    $email, $password, $rePassword )!==false){
        header("location: ../index-signup.php?error=emptyinput");
        exit();
    }
    if(invalidUsername($username) !== false){
        header("location: ../index-signup.php?error=invalidusername");
        exit();
    }
    if(invalidFirstName($firstName) !== false){
        header("location: ../index-signup.php?error=invalidfirstname");
        exit();
    }
    if(invalidLastname($lastName) !== false){
        header("location: ../index-signup.php?error=invalidlastname");
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("location: ../index-signup.php?invalidemail");
        exit();
    }
    if(invalidPassword($password, $rePassword) !== false){
        header("location: ../index-signup.php?error=passowrddontmatch");
        exit();
    }
    if(usernameExists($conn, $username, $email) !==false){
        header("location: ../index-signup.php?error=usernametaken");
        exit();
    }


    createUser($conn, $username, $firstName, $lastName, 
    $email, $password);
} 
else {
    header("location: ../index-signup.php?error=none");
    exit();
}

?>