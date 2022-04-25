<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap5css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/personalcss/style.css" crossorigin="anonymous">
    <script src="js/bootstrap5js/bootstrap.min.js" crossorigin="anonymous"></script>
    <title>CRUD 1</title>
</head>

<body>
    <h1>
        <center> CRUD 1</center>
    </h1>
    <form action="./View/confirmdata.php" method="post">
        Nombres: <input type="text" name="nombres" id="nom">
        Apellidos: <input type="text" name="apellidos" id="ape">
        Email: <input type="email" name="email" id="email">
        Password: <input type="password" name="password" id="pass">
        <button type="submit">Submit</button>
        
    </form>
    <?php?>
</body>

</html>