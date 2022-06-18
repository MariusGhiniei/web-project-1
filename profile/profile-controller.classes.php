<?php

    class ProfileController extends Profile {
    
       private $username;
       private $pass;
       private $email;
       private $id;

         public function __construct($username,$pass,$email,$id)
         {
              $this->username = $username;
              $this->pass = $pass;
              $this->email = $email;
              $this->id = $id;
         }

        public function updateUserInformation(){
            
            if($this->invalidUsername() == false)
            {
                header("location: profile.php?error=username");
                exit();
            }
            if($this->invalidEmail() == false)
            {
                header("location: profile.php?error=email");
                exit();
            }
            if($this->usernameTaken() == false)
            {
                header("location: profile.php?error=usernameoremailtaken");
                exit();
            }


            $this->updateUser($this->username,$this->pass,$this->email,$this->id);
        }

        private function emptyInput(){

            $result = null;

            if(empty( $this->username) || empty( $this->pass) || 
            empty( $this->passRepeat) || empty( $this->email )){

                $result = false;
            } 
            else { 
                $result = true;
            }

            return $result;
        }

        private function invalidUsername(){

            $result = null;

            if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)) {
                $result = false;
            }
            else {
                $result = true;
            }

            return $result;
        }

        private function invalidEmail()
        {
            $result = null;

            if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
                $result = false;
            }
            else {
                $result = true;
            }

            return $result;
        }

        private function validatePass(){

            $result = null;

            if($this->pass !== $this->passRepeat) {
                $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }

        private function usernameTaken(){
            $result = null;
            if(!$this->checkUser($this->username,$this->email)) {
                $result = false;
            }
            else {
                $result = true;
            }

            return $result;
        }

        protected function checkUser($username,$email){
            $stmt = $this->connect()->prepare('SELECT users_username FROM users WHERE users_username = ? OR
            users_email =?;');

            if(!$stmt->execute(array($username,$email))) {

                $stmt = null;

                header("location: profile.php?error=stmtfailed");
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