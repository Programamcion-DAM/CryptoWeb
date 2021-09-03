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
	window.open('mailto:programamciondani@gmail.com?subject=Email%20Subject&body=Email%20Body%20Text');
}