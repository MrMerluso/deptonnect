<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Menu principal</title>
</head>
<body>

    <?php if(isset($_SESSION['user'])): ?>
        <div class="header">
            <h1>Deptonnect</h1>
        </div>
        <div class="title">
            <?php if(isset($_SESSION['success'])): ?>
                <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            <?php endif ?>
            <h1>MENU PRINCIPAL</h1>
        </div>
        <div class="container">
            <a href="inv.php"><h2>Generar invitacion</h2></a>
            <a href=""><h2>Reservar</h2></a>
            <a href=""><h2>Pago de boletas</h2></a>
            <a href="menu.php?logout='1'"><h2>Cerrar sesion</h2></a>
        </div>
    <?php endif ?>

</body>
</html>
