<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Deptonnect</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div class="header">
      <h1>Deptonnect</h1>
    </div>
    
    <div class="title">
      <h2>Inicia sesión</h2>
    </div>
    
    <div class="container">
      <form action="index.php" method="POST">
        <?php include('error.php'); ?>
        
        <div class="input-group">
          <label>Usuario</label>
          <input type="text"  name="uname" >
        </div>
        
        <div class="input-group">
          <label>Contraseña</label>
          <input type="password"  name="pass" >
        </div>
        
        <div class="input-group">
          <button type="submit" name="login">Ingresar</button>
        </div>
        </form>
      <a href="register.php">Registrate</a><br>
      <a href="admin.php">Inicio administrador</a>
    </div>

  </body>
</html>