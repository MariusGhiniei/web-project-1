<?php

    if(isset($_POST["update"]))
    {
        //data from form
        $username = $_POST["username"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $id = $_SESSION["users_id"];
       

        include "../auth/classes/db.classes.php";
        include "profile.classes.php";
        include "profile-controller.classes.php";

        //profile object
        $profile = new ProfileController($username,$pass,$email,$id);

        $profile->updateUserInformation(); 

        //front page
        header("location: profile.php?error=none");
    }
?>