<?php

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($url,"emptyinput") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-danger"> 
        You did not fill in all fields !';
    }
    if(strpos($url,"username") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-danger"> 
        Choose a valid username (letters only) !';
    }
    if(strpos($url,"email") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-danger"> 
        Choose a valid email !';
    }
    if(strpos($url,"passwordmatch") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-danger"> 
        Passwords do not match !';
    }
    if(strpos($url,"usernameoremailtaken") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-danger"> 
        Email or Username is already taken !';
    }
    if(strpos($url,"none") == true)
    {
        echo '<p class="pt-4 has-text-centered has-text-success"> 
        You have been signed up !';
    }


?>