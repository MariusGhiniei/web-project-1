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
    <link rel = "stylesheet" href = "../style/post.css">

    <!-- Font Awesome Icons Import -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <!-- icon -->
    <link rel="icon" href ="../assets/cat.png">
</head>
<body>
    <!-- header -->
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
                <a class="navbar-item" href="post.php">
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
                            if(isset($_SESSION["users_id"]))
                            {

                        ?>
                        <a class="button is-warning" href="../profile/profile.php">
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
    
    <br> <br> <br>
    <!-- Create a Post -->
    <section class="hero is-warning">

        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title has-text-white-bis">
                    Create a Post on Zuzugram
                </h1>
            </div>
        </div> 
  
        <div class="hero-foot">
            <nav class="tabs is-boxed is-fullwidth is-large">
                <div class="container">
                    <ul>
                        <li class="tab is-active" onclick="openTab(event,'Text')"><a >Text Post</a></li>
                        <li class="tab" onclick="openTab(event,'Image')"><a >Image Post</a></li>
                        <li class="tab" onclick="openTab(event,'Video')"><a >Video Post</a></li>
                        <li class="tab" onclick="openTab(event,'Check-in')"><a >Check-in Post</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <div class="container section">
        <form action="post-text/text.inc.php" method="post">
            <div id="Text" class="content-tab" >
                <div class="field">
                    <div class="control">
                        <textarea class="textarea is-medium has-fixed-size" rows = "7" placeholder="Type your post" name="post-text"></textarea>
                    </div>
                </div>
                <br>
                <button class=" button is-danger is-outlined has-text-centered is-centered" name="post-text-submit">Post</button>
            </div>
        </form>
        
        <form action="post-image/image.inc.php" method="post" enctype="multipart/form-data">
            <div id="Image" class="content-tab" style="display:none">
                <div class="field">
                    <div class="control">
                        <textarea class="textarea is-medium has-fixed-size" rows = "7" placeholder="Type your post" name="post-text"></textarea>
                    </div>
                </div>
                
                <div id="file-js" class="file is-warning has-name" >
                    <label class="file-label">
                        <input class="file-input" type="file" name="post-image" value="">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fa fa-upload"></i>
                            </span>
                            <span class="file-label">
                                Upload an image 
                            </span>
                        </span>
                        <span class="file-name">
                        No image uploaded
                        </span>
                    </label>
                </div>
                <br>
                <button class="is-centered button is-danger is-outlined has-text-centered" name="post-image-submit" type="submit">Post</button>
            
            </div> 
        </form>
        
        <form action="post-video/video.inc.php" method="post">
            <div id="Video" class="content-tab" style="display:none">
                <div class="field">
                    <div class="control">
                        <textarea class="textarea is-medium has-fixed-size" rows = "7" placeholder="Type your post" name="post-text"></textarea>
                    </div>
                </div>

                <input class="input is-warning" type="text" placeholder="Insert video link" name="post-link">
                <br> <br>
                <button class=" button is-danger is-outlined has-text-centered is-centered" name="post-video-submit">Post</button>
            </div>
        </form>

        <form action="post-checkin/checkin.inc.php" method="post">
            <div id="Check-in" class="content-tab" style="display:none">
                <div class="field">
                    <div class="control">
                        <textarea class="textarea is-medium has-fixed-size" rows = "7" placeholder="Type your post" name="post-text"></textarea>
                    </div>
                </div>

                <input class="input is-warning" type="text" placeholder="Insert google maps location" name="post-checkin">
                <br> <br>
                <button class=" button is-danger is-outlined has-text-centered is-centered" name="post-checkin-submit">Post</button>
            </div>
        </form>
    </div>

    

    
    

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
    <script src="../js/post.js"></script>
  </body>
  </html>