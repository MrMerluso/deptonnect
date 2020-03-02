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
    
    <div class="header">
        <h1>Deptonnect</h1>
    </div>

    <div class="title">
        <h2>Registrate</h2>
    </div>

    <div class="container">
        <form action="register.php" method="post">
        <?php include('error.php') ?>
        <div class="input-group">
            <label>Usuario</label>
            <input type="text"  name="uname" >
        </div>
        <div class="input-group">
            <label> Correo</label>
            <input type="text" name = "mail">
         </div>
        <div class="input-group">
            <label> Contraseña</label>
            <input type="password"  name="pass" >
        </div>    
        <div class="input-group">
            <label> Confirmar contraseña</label>
            <input type="password" name="pass2">
        </div>
        <div class="input-group">   
            <button type="submit" name="register">Registrar</button>
        </div>
        </form>
    </div>
    
</body>
</html>