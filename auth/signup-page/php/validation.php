<?php 
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p> Fill in all fields! </p>";
    } 
    else if ($_GET["error"] == "invalidusername"){
        echo "<p> Choose a proper username! </p>";
    } 
    else if ($_GET["error"] == "invalidfirstname"){
        echo "<p> Choose a proper First Name! </p>";
    } 
    else if ($_GET["error"] == "invalidlastname"){
        echo "<p> Choose a proper Last Name! </p>";
    } 
    else if ($_GET["error"] == "invalidemail"){
        echo "<p> Choose a proper Email! </p>";
    } 
    else if ($_GET["error"] == "passowrddontmatch"){
        echo "<p> Passwords doesn't match! </p>";
    }
    else if ($_GET["error"] == "stmtfailed"){
        echo "<p> Something went wrong, try again! </p>";
    }
    else if ($_GET["error"] == "usernametaken"){
        echo "<p> Username already taken! </p>";
    }
    else if ($_GET["error"] == "none"){
        echo "<p> You have signed up! </p>";
    }
}

?>