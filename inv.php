<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Invitacion</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div class="header">
      <h1>Deptonnect</h1>
    </div>
    <div class="title">
      <h2>Por favor ingrese la informacion del invitado</h2>
    </div>

    <div class="container">
      <form action="inv.php" method="POST" id = "form">
        <?php include('error.php') ?>
        <div class="input-group">
          <label>Nombre:</label>
          <input type="text" name="nomb">
        </div>
        <div class="input-group">
          <label>Apellido:</label>
          <input type="text" name="ap">
        </div>
        <div class="input-group">
          <label>RUT:</label><br>
          <input type="text" name="rut" id="rut"> - <input type="text" name="ver" id="ver">
        </div>  
        <div class="input-group">
          <label>Departamento que visita:</label>
          <input type="text" name="depto">
        </div>
          <button type="submit" name="invite">Invitar</button>
      </form>
    </div>

  </body>
  <script src="script.js"></script>
  <script src="qrcode.min.js"></script>
</html>
