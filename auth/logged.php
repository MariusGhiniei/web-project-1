<?php
//asta trebuie in header aka navbar ca sa am session in fiecare pagina
session_start();

// asta pui in linku rile din navbar
if(isset($_SESSION["userid"])){
    echo "<li><a href = 'profile.php> Profile page </a></li>";
    echo "<li><a href = 'logout.php> Log out </a></li>";
}
else {
    echo "<li><a href = 'signup.php> Sign up </a></li>";
    echo "<li><a href = 'login.php> Log in </a></li>";
}