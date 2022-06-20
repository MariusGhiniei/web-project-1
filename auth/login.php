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

    <!-- Font Awesome Icons Import -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Css Import -->
    <link rel= "stylesheet" href= "../style/header.css">
    <link rel ="stylesheet" href ="../style/footer.css">
    <link rel ="stylesheet" href ="../style/signup.css">
    
    <!-- icon -->
    <link rel="icon" href ="../assets/cat.png">
</head>
<body>

<!-- header   -->
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="../index-home-page.php">
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
            <?php 
                if(isset($_SESSION["users_id"]))
                {
            ?>
            <div class="navbar-start navbar-center">
                <a class="navbar-item" href="../feed/feed.php">
                    Feed
                </a>
                <a class="navbar-item" href="../post/post.php">
                    Create a post
                </a>
                <a class="navbar-item" href="../profile/profile.php">
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
                            if(isset($_SESSION["users_id"])) {
                        ?>

                        <a class="button is-warning" href="profile.php">
                            <strong>
                                <?php
                                    echo $_SESSION["users_username"];
                                ?>
                            </strong>
                        </a>
                        <a class="button is-light" href="includes/logout.inc.php">
                            <strong>Log out</strong>
                        </a>

                        <?php
                            } else {
                        ?>
                        <a class="button is-warning" href="signup.php">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="login.php">
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
    
    <br>
    <?php if(!isset($_SESSION["users_id"])) { 
    ?>
    <section class="section form-border "> 
        <form action="includes/login.inc.php" method="post">
            <h1 class="title is-3 has-text-centered has-text-weight-semibold has-text-primary">LOG IN</h1>
                
            <div class="field">
                <label class="label"> Username: </label>
                <div class="control">
                    <input type="text" name = "username" 
                    class="input-reset-size input is-rounded" placeholder="Popescu20" >
                </div>
            </div>

            <div class="field">
                <label class="label"> Password: </label>
                <p class="control has-icons-left">
                    <input type="password" name="password" 
                    class="input-reset-size input is-rounded" placeholder="Password" >
                    <span class="icon is-large is-left">
                        <i class=" fa fa-lock fa-lg"></i>
                    </span>
                </p>
            </div>

            <br>

            <button class=" button is-success is-rounded has-text-weight-semibold " value = "login"
            name = "login-submit" type="submit"> Log In</button>
            <?php
            include 'includes/login-validations.inc.php';
            ?>
        </form>
    </section>

    <?php 
    } else {
    ?>
    <div class=" mt-6 has-text-centered">
        <video loop autoplay controls muted>
            <source src="../assets/login-video.mp4" type="video/mp4">
        </video>
    
    </div>
    
    <?php
    }
    ?>

    <br> <br>
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
    <script src="../js/index.js"></script>
</body>
</html>