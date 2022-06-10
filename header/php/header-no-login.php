<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuzugram</title>

    <!-- Bulma import -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <!-- Css import -->
    <link rel= "stylesheet" href= "../style/header.css">
    
    <!-- icon -->
    <link rel="icon" href ="../assets/cat.png">
</head>
<body>

    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="../../index-home-page.html">
                <img src="../assets/cat.png">
                <span class ="logo" > Zuzugram </span> 
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbar-menu" class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-warning">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            <strong>Log in</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>  

    <script src="../js/header.js"></script>

