<?php
	session_start();
	if (!isset($_SESSION['login'])) { //Pregunta si la varibale login no existe
			header("location: form-login.php?error=2");
	}
 ?>