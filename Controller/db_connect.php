<?php
    class Conection{
        private $server = 'localhost';
        private $user = 'admincalc';
        private $pass = 'admin73202647';
        private $db = 'pruebas';

        public function __construct(){
            $server = $this->server;
            $user = $this->user;
            $pass = $this->pass;
            $db = $this->db;

            try {
                $conn = new PDO("mysql:host=$server;", $user, $pass);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
                echo "Connected successfully";
            }catch(PDOException $e) {
                echo "Connection failed: ";
            }
        }
    }
    
    
?>