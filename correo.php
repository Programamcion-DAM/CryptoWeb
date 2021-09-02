<?php

$para = 'programamciondani@gmail.com';
$asunto = 'Nuevo adqueriente de DAMcoins';

$mailHedader = "From: noreply@gmail.com\r\n";
$mailHedader .= "Reply-To: noreply@gmail.com\r\n";
$mailHedader .= "Content-type: text/html; charset=utf-8\r\n";

$body = "El numero de cuenta de la persona es: \n".$_POST['textBox'];


mail($para,$aunto,$body,$mailHedader) or die('Ocurrió un error');

header('Location: https://programamcion-dam.github.io/CryptoWeb/');


?>