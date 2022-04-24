<?php
    require_once "../Controller/Persona.php";
    require_once "../Controller/db_connect.php";

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $persona = new Persona($nombres, $apellidos, $email, $password);

    $db = new Conection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap5css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap5css/bootstrap-theme.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/personalcss/style.css" crossorigin="anonymous">
    <script src="../js/bootstrap5js/bootstrap.min.js" crossorigin="anonymous"></script>

    <title>Datos de usuario</title>
</head>
<body>
    <table>
        <tr>
            <th>#</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $persona->getEmail(); ?></td>
            <td><?php echo $persona->getPassword(); ?></td>
            <td><?php echo $persona->getNombres(); ?></td>
            <td><?php echo $persona->getApellidos(); ?></td>
        </tr>
    </table>
    <form action="<script>alert('Datos guardados');</script>">
        <button type="submit">Si</button>
    </form>


</body>
</html>
