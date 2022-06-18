<?php

    class Profile extends Db{

    protected function updateUser($username,$pass,$email,$id){

        try{
            $username = "root";
                $password = "";
                $conn = new PDO('mysql:host=localhost;dbname=zuzugramDb',$username,$password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE users SET users_username = :username, users_password = :pass, users_email = :email WHERE users_id = :id";

            $stmt = $conn->prepare($sql);

            $stmt->execute();

            echo $stmt->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;
    }



}


?>