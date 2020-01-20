<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include('error.php') ?>
    <form action="register.php" method="post">
    <p>Usuario</p>
        <br>
        <input type="text"  name="uname" >
        <br>
    <p>correo</p>
        <br>
        <input type="text" name = "mail">
        <br>
    
    <p>Contraseña</p>
        <br>
        <input type="password"  name="pass" >
        <br>
    <p>confirmar contraseña</p>
        <br>
        <input type="password" name="pass2">
      <button type="submit" name="register">Registrar</button>
    </form>

</body>
</html>