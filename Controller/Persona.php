<?php

    class Persona{
        public $nombres;
        public $apellidos;
        public $email;
        public $password;

        public function __construct($nombres, $apellidos, $email, $password){
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            $this->email = $email;
            $this->password = $password;
        }

        public function getNombres(){
            return $this->nombres;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setNombres($nombres){
            $this->nombres = $nombres;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function toString(){
            return $this->nombres." ".$this->apellidos." ".$this->email." ".$this->password;
        }  
    }

?>