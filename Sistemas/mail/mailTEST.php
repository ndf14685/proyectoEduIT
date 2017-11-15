<?php
	$nombre;
	$email;
	$comentario;

	$destinatario = "tu MEIL";
	$asunto = "Texto de asunto";

	$cuerpo = "<div style=\"background-color:#ace2fa; width:550px; padding:15px; margin:auto; border:1px solid #008; font-family: verdana\">";  
	$cuerpo .= "Nombre: ".$nombre. "<br>";
	$cuerpo .= "Email: ".$email. "<br>";
	$cuerpo .= "Comentario: ".$comentario;
	$cuerpo .= "</div>";


	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: Evil Corp <evilcorp@hell.com>' . "\r\n";
	$headers .=  'Reply-To: satan@hell.com' . "\r\n";

	mail($destinatario, $asunto, $cuerpo, $headers);