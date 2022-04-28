<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuzu</title>
</head>
<body>
    <form action="php/signup.php" method="post">
        <fieldset>
            <legend style="text-align: center;">Sign Up</legend>
            <label>Username: </label>
            <input type="text" name="username" placeholder="Username ...">
            <br>
            <label >First Name: </label>
            <input type="text" name="firstName" placeholder="First Name ...">
            <br>
            <label>Last Name: </label>
            <input type="text" name = "lastName" placeholder="Last Name ...">
            <br>
            <label>E-mail: </label>
            <input type="text" name="email" placeholder="E-mail ...">
            <br>
            <label>Password: </label>
            <input type="password" name="password" placeholder="Password ...">
            <br>
            <label>Rewrite Password: </label>
            <input type="password" name="rePassword" placeholder="Rewrite your password ...">
            <br>
            <button type="submit" name="submit"> Sign Up</button>
        </fieldset>
        <?php require_once 'php/validation.php'; ?>
    </form>
    
</body>
</html>