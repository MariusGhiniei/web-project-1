<?php

    class SignupController extends Signup{
        
        private $username;
        private $pass;
        private $passRepeat;
        private $email;

        public function __construct($username,$pass,$passRepeat,$email)
        {
            $this->username = $username;
            $this->pass = $pass;
            $this->passRepeat = $passRepeat;
            $this->email = $email;
        }

        public function singupUser(){

            if($this->emptyInput() == false){
                
                header("location: ../../index-home-page.php?error=emptyinput");
                exit();
            }
            if($this->invalidUsername() == false){

                header("location: ../../index-home-page.php?error=username");
                exit();
            }
            if($this->invalidEmail() == false){

                header("location: ../../index-home-page.php?error=email");
                exit();
            }
            if($this->validatePass() == false){

                header("location: ../../index-home-page.php?error=passwordmatch");
                exit();
            }
            if($this->usernameTaken() == false){

                header("location: ../../index-home-page.php?error=usernameoremailtaken");
                exit();
            }

            $this->setUser($this->username,$this->pass,$this->email);
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
    }
?>