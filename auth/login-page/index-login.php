<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuzu</title>

    <!-- Bulma import -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <!-- Font Awesome Icons Import -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Css import -->
    <link rel= "stylesheet" href= "../signup-page/style/signup.css">
    <link rel="stylesheet" href="../../header/style/header.css">
    <link rel="stylesheet" href ="../login-page/style/login.css">
    
    <!-- icon -->
    <link rel="icon" href ="../../header/assets/cat.png">
</head>
<body>

    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="../../index-home-page.html">
                <img src="../../header/assets/cat.png">
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

    <br> <br> <br> <br>

    <section class="section form-border "> 
        <form action="php/login.php" method="post">
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
            <button class=" button is-success is-rounded has-text-weight-semibold " name = "login">Log In</button>
            
            <button class="align-left button is-warning is-rounded has-text-weight-semibold"type="submit" name="submit"> Sign Up</button>
            

        <?php 
            require_once '../login-page/php/validations.php';
            ?>
        </form>
    </section>
    
    <!-- js import -->
    <script src="../../header/js/header.js"></script>
</body>
</html>