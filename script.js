var form = document.getElementById("form");
form.onsubmit = function(e) {
	e.preventDefault();
	var name = document.getElementById("nomb");
	var ape = document.getElementById("ap");
	var rut = document.getElementById("rut");
	var ver = document.getElementById("ver");
	var depto = document.getElementById("depto");
	var qrcode = new QRCode(document.getElementById("qrcode"), name.value + ape.value + rut.value + ver.value + depto.value)
}

