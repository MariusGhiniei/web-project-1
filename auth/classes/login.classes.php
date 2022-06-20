<?php

    class Login extends Db{

        protected function getUser($username,$pass)
        {
            $stmt = $this->connect()->prepare(
                'SELECT users_password FROM users WHERE users_username = ? 
                OR users_email = ?;'
            );

            if(!$stmt->execute(array($username, $pass))){

                $stmt = null;

                header("location: ../login.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0) // no info in db
            {
                $stmt = null;

                header("location: ../login.php?error=usernotfound");
                exit();
            }

            $passHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPass = password_verify($pass,$passHashed[0]["users_password"]); //first row

            if($checkPass == false)
            {
                $stmt = null;

                header("location: ../login.php?error=wrongpassword");
                exit();
            }

            elseif($checkPass == true)
            {
                $stmt = $this->connect()->prepare(
                'SELECT * FROM users WHERE users_username = ? OR users_email =?
                 AND users_password =?;');

                if(!$stmt->execute(array($username,$username,$pass)))
                {
                    $stmt = null;
                   
                    header("location: ../login.php?error=stmtfailed");
                    exit();
                }

                if($stmt->rowCount() == 0)
                {
                    $stmt = null;

                    header("location: ../login.php?error=usernotfound");
                    exit();
                }

                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

                session_start();

                //session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["users_id"] = $user[0]["users_id"];
                $_SESSION["users_username"] = $user[0]["users_username"];

                //cookies

                setcookie("loggedin", true, time() + (86400 * 30), "/");

            }
            
            $stmt = null;
        }
    }


?>