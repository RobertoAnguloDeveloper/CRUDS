<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap5css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/personalcss/style.css" crossorigin="anonymous">
    <script src="../js/bootstrap5js/bootstrap.min.js" crossorigin="anonymous"></script>

    <title>Datos de usuario</title>
</head>
<body>
    <fieldset>
        <legend>Datos de usuario</legend>
            <div class="container mt-3">
                <form action="../View/creado.php" style="margin-left: 40px" method="post">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>USER/EMAIL</th>
                                <th>PASSWORD</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                            </tr>
                        </thead>
                        <tr>
                            <td><input type="text" name="email" id="email" value="<?php echo  $_POST['email']; ?>"></td>
                            <td><input type="text" name="password" id="pass" value="<?php echo $_POST['password'];?>"></td>
                            <td><input type="text" name="nombres" id="nom" value="<?php echo $_POST['nombres']; ?>"></td>
                            <td><input type="text" name="apellidos" id="ape" value="<?php echo $_POST['apellidos']; ?>"></td>
                        </tr>
                    </table>
                    <h6><b>DESEA CREAR EL USUARIO CON ESTOS DATOS?</b></h6>
                    <div style="margin-left: 40px">
                        <button type="submit" class="btn btn-warning"><b>ACEPTAR</b></button>
                    </div>
                </form>
            </div>
    </fieldset>
</body>
</html>