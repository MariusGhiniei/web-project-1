<?php

if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p> Fill in all fields! </p>";
    } 
    else if ($_GET["error"] == "wronglogin"){
        echo "<p> Incorret login information! </p>";
    } 
    
    else if ($_GET["error"] == "none"){
        echo "<p> LOGINNNNN! </p>";
    }
}

?>