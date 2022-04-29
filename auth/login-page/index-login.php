<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuzu</title>
</head>
<body>
    <form action="php/login.php" method="post">
        <fieldset>
            <legend style="text-align: center;">Log In</legend>
            <label>Username: </label>
            <input type="text" name ="username" placeholder="Username/Email ...">
            <br>
            <label >Password: </label>
            <input type="password" name="password" placeholder="Password ...">
            <br>
            <button type ="submit" name ="submit"> Log In</button>
        </fieldset>

       <?php 
        require_once '../login-page/php/validations.php';
        ?>
    </form>
    
</body>
</html>