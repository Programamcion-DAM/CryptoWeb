<?php

$para = 'programamciondani@gmail.com';
$asunto = 'Nuevo adqueriente de DAMcoins';

$mailHedader = "From: noreply@gmail.com\r\n";
$mailHedader .= "Reply-To: noreply@gmail.com\r\n";
$mailHedader .= "Content-type: text/html; charset=utf-8\r\n";

$body = "El numero de cuenta de la persona es: \n".$_POST['textBox'];


mail($para,$asunto,$body,$mailHedader) or die('Ocurrió un error');

header('Location: https://damcoins.000webhostapp.com/');
?>