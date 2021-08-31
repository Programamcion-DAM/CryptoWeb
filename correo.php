<?php
	
if(issset($_POST['acceptButton'])){
	if(!empty($_POST['textBox'])){
		$text = $_POST['ntextBox'];

		$header = "From: noreply@example.com" . "\r\n";
		$header .= "Reply-To: noreply@example.com" . "\r\n";
		$header .= "X-Mailer: PHP/" . phpversion();

		$mail = @mail("programamciondani@gmail.com", "Prueba correo", $text,$header);

		if($mail){
			echo "<h4> Mail enviado exitosamente </h4>"
		}
	}
}