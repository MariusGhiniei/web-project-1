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
    }
?>