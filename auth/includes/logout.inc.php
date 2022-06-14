<?php
    session_start();
    session_unset();
    session_destroy();
    

    header("location: ../../index-home-page.php?error=none");



?>