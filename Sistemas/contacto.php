<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$comentario = $_POST['comentario'];

	//Configuramos datos de email a enviar
	$destinatario = "leilanybanez@gmail.com";
	$asunto = "Mail Test";
	$cuerpo = "<div style=\"background-color:#ace2fa; width:550px; padding:15px; margin:auto; border:1px solid #008; font-family: verdana\">";  
	$cuerpo .= "Nombre: ".$nombre. "<br>";
	$cuerpo .= "Email: ".$email. "<br>";
	$cuerpo .= "Comentario: ".$comentario;
	$cuerpo .= "</div>";


	 	mail($destinatario, $asunto, $cuerpo);

		echo "Gracias, ", $nombre, "por su comentario";

 ?>