<?php
    class Connection{
        public $server = 'localhost';
        public $user = 'admincalc';
        public $pass = 'admin73202647';
        public $db = 'pruebas';

        public function __construct(){
            $server = $this->server;
            $user = $this->user;
            $pass = $this->pass;
            $db = $this->db;
        }

        public function connect(){
            try {
                $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->user, $this->pass);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
                return $conn;
            }catch(PDOException $e) {
                echo "Connection failed: ";
            }
        }
    }
    
    
?>