<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Invitacion</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="ocr.js"></script>
  </head>

  <body>
    <div class="header">
      <h1>Deptonnect</h1>
    </div>
    <div class="title">
      <h2>Por favor ingrese la informacion del invitado</h2>
    </div>

    <div class="container">
      <form action="inv.php" method="POST" id = "myForm">
        <?php include('error.php') ?>
        
        <div class="input-group">
          <label>Nombre:</label>
          <input type="text" name="nomb" id="nomb">
        </div>
        
        <div class="input-group">
          <label>Apellido:</label>
          <input type="text" name="ap" id="ap">
        </div>
        
        <div class="input-group">
          <label>RUT:</label><br>
          <input type="text" name="rut" id="rut"> - <input type="text" name="ver" id="ver">
        </div>  
        
        <div class="input-group">
          <label>Departamento que visita:</label>
          <input type="text" name="depto">
        </div>
          
        <button type="submit" name="invite" onclick="generateQR()">Invitar</button>
        <?php if(isset($_SESSION['admin'])): ?>
          <br><br>
          <button type="submit" name="invite">Ingresar</button>
        <?php endif ?>
      </form>
      <?php if(isset($_SESSION['admin'])): ?>
        <br>
        <button onclick="scan()">Escanear</button>       
      <?php endif ?> 
    </div>
    
    <div id="qrcode"></div>

  </body>
  
  <script src="qrcode.min.js"></script>
  <script src="script2.js"></script>
  
</html>
