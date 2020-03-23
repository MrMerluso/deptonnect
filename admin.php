<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Inicio Administrador</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div class="header">
      <h1>Deptonnect</h1>
    </div>
    
    <div class="title">
      <h2>Ingreso administrador</h2>
    </div>
    
    <div class="container">
        
      <form action="admin.php" method="POST">
        <?php include('error.php'); ?>
        <div class="input-group">
          <label>Usuario</label>
          <input type="text"  name="adminName" >
        </div>
        
        <div class="input-group">
          <label>Contraseña</label>
          <input type="password"  name="adminPass" >
        </div>
        
        <div class="input-group">
          <button type="submit" name="adminAccess">Ingresar</button>
        </div>
        </form>
    </div>

  </body>
</html>