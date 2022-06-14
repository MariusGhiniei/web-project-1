<?php
    if(isset($_POST["signup-submit"]))
    {
        //data from form
        $username = $_POST["username"];
        $pass = $_POST["password"];
        $passRepeat = $_POST["rePassword"];
        $email = $_POST["email"];
       
        include "../classes/db.classes.php";
        include "../classes/signup.classes.php";
        include "../classes/signup-controller.classes.php";
        
        //signup object
        $signup = new SignupController($username,$pass,$passRepeat,$email);

        $signup->singupUser();

        //front page
        header("location: ../../index-home-page.php?error=none");
    }
?>