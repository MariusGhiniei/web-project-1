<?php

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url,"uptaded") == true)
{
       echo "<div class='has-text-centered'>
                <div class='is-mobile is-centered'>
                    <div>
                        <div class='notification center is-success'>
                            <p>Your profile has been updated !</p>
                            <button class='delete'></button>
                        </div>
                    </div>
                </div>
            </div>";
}
if(strpos($url,"deleted") == true)
{
         echo "<div class='has-text-centered'>
                 <div class='is-mobile is-centered'>
                      <div>
                            <div class='notification center is-danger'>
                             <p>Your profile has been deleted !</p>
                             <br>
                             <button class='button is-responsive is-warning is-rounded has-text-weight-semibold'> 
                                <a href='../auth/signup.php'> Sign Up </a>
                            </button>
                            <button class='button is-responsive align-right is-success is-rounded has-text-weight-semibold'>
                                <a class='has-text-white' href='../auth/login.php'> Log In  </a>
                            </button> 
                             <button class='delete'></button>
                            </div>
                      </div>
                 </div>
                </div>";
}

if(strpos($url,"failed") == true)
{
    echo "<div class='has-text-centered'>
            <div class='is-mobile is-centered'>
                <div>
                    <div class='notification center is-warning'>
                        <p>Something went wrong, please try again !</p>
                        <button class='delete'></button>
                    </div>
                </div>
            </div>
        </div>";
}
?>