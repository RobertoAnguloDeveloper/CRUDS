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
    <div class="container mt-3">
        <form action="#" style="margin-left: 40px" method="post">
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
                    <td name="user" id="user"><?php echo $_POST['email']; ?></td>
                    <td><?php echo $_POST['password'];?></td>
                    <td><?php echo $_POST['nombres']; ?></td>
                    <td><?php echo $_POST['apellidos']; ?></td>
                </tr>
            </table>
            <h6><b>DESEA CREAR EL USUARIO CON ESTOS DATOS?</b></h6>
            <button type="submit" class="btn btn-warning" formaction="../Model/dao.php">SI</button>
            <button type="submit" class="btn btn-warning" onclick="test()">NO</button>
        </form>
    </div>
</body>
</html>