<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DAMCoin</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>
<body>
	<div id = "background"></div>
	<h1 id = "mainTitle">Consigue tus DAM Coins</h1>
	<div id = "firsContainer" onclick="disapearContainer()">COMENZAR</div>
	<form id = "form" method = "post">
		<span id = "formTitle">Ingrese su numero de cuenta</span>
		<input type="text" id = "textBox">
		<button id ="acceptButton">ENVIAR</button>
	</form>
	<?php
		include('correo.php');
	?>
</body>
</html>