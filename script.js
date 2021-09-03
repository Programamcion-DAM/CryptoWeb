'use strict';

function disapearContainer(){
	var box = document.getElementById("firsContainer");
	box.style.opacity  = "0%";

	setTimeout(function(){
		box.style.display = "none";
		var form = document.getElementById("form");
		form.style.opacity = "100%";
	}, 1000);
}

function mail(){
	var direction = document.getElementById('textBox').value;
	var errorText = document.getElementById('endText');
	errorText.style.display = "block";

	window.open('mailto:programamciondani@gmail.com?subject=Nueva%20direccion%20de%20cuenta&body=Mi%20dirección%20de%20cuenta%20DAMcoin%20es:%20%20'+direction);
}