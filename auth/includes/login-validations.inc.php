<?php

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($url,"emptyinput") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-danger"> 
        You did not fill in all fields !';
    }
    if(strpos($url,"stmtfailed") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-danger"> 
        Something went wrong, please try again !';
    }
    if(strpos($url,"usernotfound") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-danger"> 
        Your is not found in the database !';
    }
    if(strpos($url,"wrongpassword") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-danger"> 
        Password is incorrect !';
    }
    if(strpos($url,"none") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-success"> 
        You have successfully logged in !';
    }
    


?>