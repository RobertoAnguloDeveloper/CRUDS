<?php
    require_once "../Model/dao.php";

    $dao = new dao();
    $dao->crearUsuario();

    echo "alert('Usuario creado correctamente');";
?>