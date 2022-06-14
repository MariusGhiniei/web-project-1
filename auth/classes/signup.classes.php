<?php

    class Signup extends Db{

        
        protected function setUser($username,$pass,$email){

            $stmt = $this->connect()->prepare(
            'INSERT INTO users(users_username,users_password,users_email)
            VALUES (?,?,?);');

            $hashedPass = password_hash($pass,PASSWORD_DEFAULT);

            if(!$stmt->execute(array($username,$hashedPass,$email))) {
                $stmt = null;

                header("location: ../../index-home-page.php?error=stmtfailed");
                exit();
            }

            $stmt = null;
        }

        protected function checkUser($username,$email){

            $stmt = $this->connect()->prepare('
            SELECT users_username FROM users WHERE users_username = ? OR
            users_email =?;');

            if(!$stmt->execute(array($username,$email))) {

                $stmt = null;

                header("location: ../../index-home-page.php?error=stmtfailed");
                exit();
            }

            $resultCheck = null;

            if($stmt->rowCount() > 0){  //atleast 1 row of info from db 
                
                $resultCheck = false;
            } else {
                $resultCheck = true;
            }

            return $resultCheck;
        }

    }
?>