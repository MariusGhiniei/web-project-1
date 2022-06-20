<?php

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($url,"emptyinput") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div class='notification center is-warning'>
                        <p>Please fill in all the fields !</p>
                        <button class='delete'></button>
                    </div>
                </div>
            </div>";
    }
    if(strpos($url,"username") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div class='notification center is-warning'>
                        <p>Please enter a valid username!</p>
                        <button class='delete'></button>
                    </div>
                </div>
            </div>";
    }
    if(strpos($url,"email") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div class='notification center is-warning'>
                        <p>Please enter a valid email !</p>
                        <button class='delete'></button>
                    </div>
                </div>
            </div>";
    }
    if(strpos($url,"passwordmatch") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div class='notification center is-warning'>
                        <p>Passwords do not match !</p>
                        <button class='delete'></button>
                    </div>
                </div>
            </div>";
    }
    if(strpos($url,"usernameoremailtaken") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div class='notification center is-warning'>
                        <p>Username or email already taken !</p>
                        <button class='delete'></button>
                    </div>
                </div>
            </div>";
    }
    if(strpos($url,"none") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div class='notification center is-success-dark'>
                        <p class='has-text-weight-semibold'>You have been signed up !</p> <br>
                        <p class='has-text-weight-semibold'>You can now log in !</p>
                        <br>
                        <button class='button is-responsive is-success is-rounded has-text-weight-semibold'>
                        <a class='has-text-white' href='login.php'> Log In  </a>
                        </button> 
                        <button class='delete'></button>
                    </div>
                </div>
            </div>";
    }


?>