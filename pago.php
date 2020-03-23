<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-color: #B0EFF9;
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
    width: 40%;
    margin: 0px auto;
    background-color:wheat;
    padding: 5px 20px 15px 20px;
    border: 1px solid black;
    border-top: 0px;
}

.header{
  color: white;
  background: lightseagreen;
  text-align: center;
  padding: 5px;
}

.title{
  width: 40%;
  color: white;
  background: lightseagreen;
  text-align: center;
  padding: 5px;
  margin: 30px auto 0px;
  border: 1px solid black;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
    background-color: lightseagreen;
    border: none;
    text-align: center;
    padding: 15px;
    font-size: 20px;
    width: 100%;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .container{
      width: 100%
  }
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div class="header"><h1>Deptonnect</h1></div>

<div class="title"><h2>Paga tu boleta</h2></div>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="">
      
        <div class="row">
          <div class="col-50">
            <h3>Información</h3>
            <label for="fname"><i class="fa fa-user"></i> Nombre completo</label>
            <input type="text" id="fname" name="firstname" placeholder="Juan V.T.R.">
            <label for="email"><i class="fa fa-envelope"></i> Correo electrónico</label>
            <input type="text" id="email" name="email" placeholder="juan@vtr.com">
            <label for="adr">Mes de expiración</label>
            <input type="text" id="adr" name="address" placeholder="Enero">
            <label for="city">Año expiración</label>
            <input type="text" id="city" name="city" placeholder="2040">

            
          </div>

          <div class="col-50">
            <h3>Pago</h3>
            <label for="fname">Metodos de pago</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nombre en la tarjeta</label>
            <input type="text" id="cname" name="cardname" placeholder="Juan Victor Torres Rojas">
            <label for="ccnum">Número de tarjeta</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-3333-1111-2222">
            <label for="expmonth">CVV</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="420">
          </div>
          
        </div>
        <input type="submit" value="Continuar" class="btn">
      </form>
    </div>
  </div>
  </div>
</div>

</body>
</html>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Paga tu boleta</title>
</head>
<body>
    <div class="header"><h1>Deptonnect</h1></div>
    <div class="title"><h2>Paga tu boleta online</h2></div>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="pago.php" method="post">
                    <div class="row">
                        <div class="col-50">
                            <div class="input-group">
                                <label for="nomb">Nombre completo</label>
                                <input type="text" name="nomb">
                            </div>
                            <div class="input-group">
                                <label for="mail">Correo</label>
                                <input type="text" name="mail">
                            </div>
                            <div class="input-group">
                                <label for="depto">Numero departamento</label>
                                <input type="text" name="depto">
                            </div>
                        
                            <div class="row">
                                <div class="col-50">
                                    <div class="input-group">
                                        <label for="numTarjeta">Numero de Tarjeta</label>
                                        <input type="text" name="numTarjeta">
                                    </div>
                                    <div class="input-group">
                                        <label for="expMes">Mes de expiración</label>
                                        <input type="text" name="expMes">
                                    </div>
                                    <div class="input-group">
                                        <label for="expYr">Año expiración</label>
                                        <input type="text" name="expYr">
                                    </div>
                                    <div class="input-group">
                                        <label for="cvv">CVV</label>
                                        <input type="text" name="cvv">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 
-->