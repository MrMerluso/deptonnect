<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Invitacion</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>

  <body> 
    <section id="alignment">
    <form action="" method="POST" id = "form">
      <h1>Por favor ingrese la informacion del invitado</h1><br>
      <p>Nombre:</p>
      <input type="text" name="nomb" required><br>
      <p>Apellido:</p>
      <input type="text" name="ap" required><br>
      <p>RUT:</p>
      <input type="number" name="rut" required> - <input type="text" name="ver" required><br>
      <p>Departamento que visita:</p>
      <input type="text" name="depto" required><br><br>
      <button type="submit" onclick="generateQR()">Invitar!</button>
      <div id="qrcode"></div>

    </form>
    </section>

  </body>
  <script src="script.js"></script>
  <script src="qrcode.min.js"></script>
</html>
