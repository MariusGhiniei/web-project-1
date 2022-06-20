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
    <link rel ="stylesheet" href ="../style/footer.css">
    <link rel ="stylesheet" href ="../style/signup.css">
    <link rel ="stylesheet" href ="../style/profile.css">

    <!-- Font Awesome Icons Import -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <!-- icon -->
    <link rel="icon" href ="../assets/cat.png">
</head>
<body>
    <!-- header -->
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index-home-page.php">
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
                <a class="navbar-item">
                    Feed
                </a>
                <a class="navbar-item" href="../post/post.php">
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
                        <a class="button is-warning" href="../auth/includes/profile.php">
                            <strong>
                                <?php
                                echo $_SESSION["users_username"];
                                ?>
                            </strong>
                        </a>
                        <a class="button is-light" href="../auth/includes/logout.inc.php">
                            <strong>Log out</strong>
                        </a>

                        <?php
                            }
                            else
                            {
                        ?>
                        <a class="button is-warning" href="../auth/signup.php">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="../auth/login.php">
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
   
   
                            
   
    <?php include "profile.inc.php"; ?>
    
    <br> <br> <br> <br> <br> 
    <form action="update.php" method="post">
        <h1 class="title is-size-4-touch has-text-centered has-text-info"><? echo $_SESSION["users_username"]?>'s profile Settings</h1>

        <div class="container has-text-centered">
            <div class="field">
                <label class="label">Username: </label> 
                <div class="control">
                    <input class="input" type="text" size="10" style="width:275px;" id="profile-username"
                    name="username" value="<?php echo $username; ?>" disabled>
                    <a id="edit-username" class="ml-4 mb-1"> 
                        <span class="icon is-large is-right">
                            <i class="fa fa-2x fa-edit"></i>
                        </span>
                    </a>
                </div>
            </div>

            <br> 

            <div class="field">
                <label class="label">Email: </label> 
                <div class="control">
                    <input class="input" type="email" name="email" style="width:275px;" id="profile-email" 
                    value="<?php echo $email; ?>" disabled>
                    <a id="edit-email" class="ml-4 mb-1"> 
                        <span class="icon is-large is-right">
                            <i class="fa fa-2x fa-edit"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    

        <div class="buttons is-centered mt-4 pt-4">
            <button class="button is-info" name="update-profile-submit">Save Changes</button>
    </form>
        <form action="delete.php" method="post" >
            <button class="button is-danger" name="delete-submit">Delete Account</button>
        </form>
    </div>
    <?php include "notifications.php"; ?>

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
    <script src="../js/profile.js"></script>
  </body>
  </html>