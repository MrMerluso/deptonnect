var nombre = document.getElementById("nom");
var apellido = document.getElementById("ap");
var rut = document.getElementById("rut");
var veri = document.getElementById("ver");
var depto = document.getElementById("depto");
var qrdata = nombre.concat(apellido, rut, veri, depto);
var qrcode = new QRCode(document.getElementById("qrcode"));

function generateQR(){
	var data = qrdata.value;
	qrcode.makeCode(qrdata)
}
