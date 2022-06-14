<?php

    class LoginController extends Login {

        private $username;
        private $pass;

        public function __construct($username,$pass)
        {
            $this->username = $username;
            $this->pass = $pass;
        }

        public function loginUser()
        {
            if($this->emptyInput() === false)
            {
                header("location: ../login.php?error=emptyinput");
                exit();
            }

            $this->getUser($this->username,$this->pass);
        }

        private function emptyInput()
        {
            $result = null;

            if(empty($this->username) || empty($this->pass)){
                $result = false;
            }
            else
            {
                $result = true;
            }
            
            return $result;
        }
    }
?>