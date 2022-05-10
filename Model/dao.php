<?php
    require_once "../Controller/db_connect.php";

    class dao{

        public function crearUsuario(){
            $conn = new Connection();
            $conn = $conn->connect();

            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO usuarios (email, password, nombres, apellidos) VALUES (:email, :password, :nombres, :apellidos)";
            $stmt = $conn->prepare($sql);
            
            $stmt->bindParam(':nombres', $nombres);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            return $stmt;
        }
    }
?>
