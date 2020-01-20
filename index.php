<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Deptonnect</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="alignment">
    <h1>Deptonnect</h1>
    <form action="index.php" method="POST">
      <?php include('error.php'); ?>
      <p>Usuario</p>
      <br>
        <input type="text"  name="uname" >
        <br>
      <p>Contraseña</p>
       <br>
        <input type="password"  name="pass" >
        <br>
      <button type="submit" name="login">Ingresar</button>
    </form>
    <a href="register.php">Registrate</a>
    <h3 id="BOTTOM">¡DESCARGA NUESTRA APP!</h3>
    
    </div>
  </body>
</html>