<?php
	$usu_login = $_POST['usu_login'];
	$usu_clave = $_POST['usu_clave'];
require "conexion.php";

	$sql = "SELECT usu_nombre
				FROM usuarios 
					WHERE usu_login = '".$usu_login."'
					AND usu_clave = '".$usu_clave."'";

$resultado = mysqli_query($link, $sql)
	or die(mysqli_error($link));

$chequeo = mysqli_num_rows($resultado);

		if ($chequeo == 0) {
			//echo "Error";
			header("location: form-login.php?error=1");
		}else{
			//rutina de autenticación
			session_start();
			$_SESSION['login'] = 1;
			$fila = mysqli_fetch_assoc($resultado);
			$_SESSION['usu_nombre'] = $fila['usu_nombre'];
			//redirección a admin
			header("location: admin.php");
		}


?>