var qrcode = new QRCode(document.getElementById("qrcode"));
var list = document.getElementById("form");

function generateQR(){
	var string = "";
	var i;
	for(i = 0; i<list.length; i++){
		string += list[i].value + " ";

	}
	
	qrcode.makeCode(string);
}
