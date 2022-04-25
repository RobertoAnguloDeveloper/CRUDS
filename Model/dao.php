<?php
    require_once "../Controller/db_connect.php";
    var_dump($_POST);

    class dao{
        
        public function crearUsuario(){
            //Query using PDO Bind Parameters
            // $sql = "INSERT INTO usuarios (nombres, apellidos, email, password) VALUES (:nombres, :apellidos, :email, :password)";
            // $stmt = $this->conn->prepare($sql);
            // $stmt->bindParam(':nombres', $nombres);
            // $stmt->bindParam(':apellidos', $apellidos);
            // $stmt->bindParam(':email', $email);
            // $stmt->bindParam(':password', $password);
            // $stmt->execute();
            // return $stmt;
        }
    }
?>
