<?php

    class Profile extends Db{

        protected function updateInformation($username,$email,$pass){
            $sql = "UPDATE users SET username = '$username', email = '$email', password = '$pass' WHERE id = '$this->id'";
            
            if(!$this->connect()->query($sql)){
                return false;
            }
            else{
                return true;
            }
        }
       

    }
?>