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

    if(strpos($url,"stmtfailed") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div class='notification center is-danger'>
                        <p>Something went wrong, please try again !</p>
                        <button class='delete'></button>
                    </div>
                </div>
            </div>";
    }

    if(strpos($url,"usernotfound") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                        <div class='notification center is-warning'>
                            <p>User not found !</p>
                            <button class='delete'></button>
                        </div>
                    </div>
            </div>";
    }
    if(strpos($url,"wrongpassword") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                        <div class='notification center is-warning'>
                            <p>Wrong password !</p>
                            <button class='delete'></button>
                        </div>
                    </div>
            </div>";
    }
    if(strpos($url,"none") == true)
    {
        echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                        <div class='notification center is-success'>
                            <p class='has-text-weight-semibold'>You have to be logged in to see this page !</p>
                            <button class='delete'></button>
                        </div>
                </div>
            </div>";
    }
    


?>