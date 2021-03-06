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
    <link rel= "stylesheet" href= "style/header.css">
    <link rel ="stylesheet" href ="style/footer.css">
    <link rel ="stylesheet" href ="style/signup.css">

    <!-- Font Awesome Icons Import -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <!-- icon -->
    <link rel="icon" href ="assets/cat.png">
</head>
<body>
    <!-- header -->
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index-home-page.php">
                <img src="assets/cat.png">
                <span class ="logo" > Zuzugram </span> 
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbar-menu" class="navbar-menu">
            <?php 
                if(isset($_SESSION["users_id"]))
                {
            ?>
            <div class="navbar-start navbar-center">
                <a class="navbar-item">
                    Feed
                </a>
                <a class="navbar-item" href="post/post.php">
                    Create a post
                </a>
                <a class="navbar-item" >
                    Profile
                </a>
            </div>
            <?php 
                }
                ?>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <?php
                            if(isset($_SESSION["users_id"]))
                            {

                        ?>
                        <a class="button is-warning" href="auth/includes/profile.php">
                            <strong>
                                <?php
                                echo $_SESSION["users_username"];
                                ?>
                            </strong>
                        </a>
                        <a class="button is-light" href="auth/includes/logout.inc.php">
                            <strong>Log out</strong>
                        </a>

                        <?php
                            }
                            else
                            {
                        ?>
                        <a class="button is-warning" href="index-home-page.php">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="auth/login.php">
                            <strong>Log in</strong>
                        </a>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>  

    <!-- signup form -->
    
    <section style="padding:10rem 1.5rem;">
        <div class="welcome-center content is-large has-text-centered">
            <h1 style = "font-size:5rem;
                        background-clip: text;
                        background: linear-gradient(346deg, rgba(228,221,69,1) 0%, rgba(214,149,106,1) 52%, rgba(0,212,255,1) 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        -webkit-background-clip: text;

                "class=" is-size-1-mobile has-text-weight-bold ">Welcome to Zuzugram!</h1> 
            <p class="is-size-3-mobile has-text-link is-italic">
            A social media app for cat lovers!
            </p>
            <br> <br> <br>
            <?php 
                if(!isset($_SESSION["users_id"]))
                {
            ?>
            <button class="button is-medium is-responsive is-warning is-rounded has-text-weight-semibold" name="signup-submit"> 
                <a href="auth/signup.php"> Sign Up </a>
            </button>
            <button class="button is-medium is-responsive align-right is-success is-rounded has-text-weight-semibold " name = "login">
                <a class="has-text-white" href="auth/login.php"> Log In  </a>
            </button> 
            <?php
                }
                else
                {
            ?>
            <button class="button is-medium is-responsive is-warning is-rounded has-text-weight-semibold" name="signup-submit"> 
                <a href="profile/profile.php"> Profile </a>
            </button>
            <button class="button is-medium is-responsive align-right is-success is-rounded has-text-weight-semibold " name = "login">
                <a class="has-text-white" href="auth/includes/logout.inc.php"> Log Out  </a>
            </button>
            <?php
                }
            ?>
        </div>
    </section>
    




    <footer class="footer-mine">
        <div class="content has-text-centered">
        <p>
            <strong>Zuzugram</strong> 
                by <a href="https://www.linkedin.com/in/marius-ghiniei-441654160/">
                Ghiniei Marius - Iulian</a>  &copy; 2022 <br>
            <em> A college project. </em>
    
            <br> 
            <div class="is-centered">
                <a class="footer-links" href="https://github.com/MariusGhiniei/web-project-1">
                <i class="fab fa-2x fa fa-github"></i> 
                </a>
                <a href="mailto:mghiniei@gmail.com" > 
                <i class="fab fa-2x fa fa-google"></i> 
                </a>
            </div> 
        </p>
        </div>
    
    </footer>
    <script src="js/index.js"></script>
  </body>
  </html>