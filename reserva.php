<?php include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios de reserva</title>

    <link href='core/main.css' rel='stylesheet' />
    <link href='daygrid/main.css' rel='stylesheet' />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        html,body{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;

        }

        #calendar{
            max-width: 700px;
            margin: 40px, auto;
        }
    </style>

    <script src='core/main.js'></script>
    <script src="interaction/main.js"></script>
    <script src='daygrid/main.js'></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid','interaction', 'timeGrid', 'list' ],
          header:{
            left:'prev,next today',
            center: 'title',
            right: 'dayGridMonth,dayGridWeek'
          },

          dateClick:function(info){
            $("#fecha").val(info.dateStr);
            $("#exampleModal").modal("toggle");            
          },
          
        });
        
        calendar.setOption("locale","Es");

        calendar.render();

        $("#btnAccept").click(function(info){
          recolectarDatos();
          calendar.addEvent({
            title:$("#espacio").val(),
            start:$("#fecha").val()
          });       
          $("#exampleModal").modal("toggle");
            
            
        });

        $("btnCancel").click(function(){
          $("#exampleModal").modal("toggle");
        });

        function recolectarDatos(){
          nuevoEvento={
            title:$("#espacio").val(),
            owner:$("#depto").val(),
            start:$("#fecha").val()+" "+$("#hora").val(),	
            end:$("#fecha").val()+" "+$("#hora").val(),
          }
          return nuevoEvento;
        }
        function enviarInfo(objEvento){
          $.ajax()
        }
      });
  
    </script>

</head>
<body>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos para reservar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <label for="espacio">Quincho/Sala de eventos:</label>
          <input type="text" name="espacio" id="espacio">
          <label for="depto">Ingrese su departamento:</label>
          <input type="text" name="depto" id="depto">
          <label for="fecha">Fecha:</label>
          <input type="text" name="fecha" id="fecha">
          <label for="hora">Ingrese hora:</label>
          <input type="text" name="hora" id="hora">
        </div>
        <div class="modal-footer">

            <button type="button" class="btn btn-success" id="btnAccept">Agregar</button>

        </div>
      </div>
    </div>
  </div>

    <div id="calendar"></div>
</body>
</html>