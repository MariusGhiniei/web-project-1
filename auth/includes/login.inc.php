<?php
    if(isset($_POST["login-submit"]))
    {
        //data from form
        $username = $_POST["username"];
        $pass = $_POST["password"];

        include "../classes/db.classes.php";
        include "../classes/login.classes.php";
        include "../classes/login-controller.classes.php";
        
        //login object 
        $login = new LoginController($username,$pass);

        $login->loginUser();


        //login page
        header("location: ../login.php?error=none");

        if(!empty($_POST["remember-submit"])){
            setcookie("remember",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));

        } else {
            if(isset($_COOKIE["remember"])){
                setcookie("remember","");
            }
        }
    }
?>