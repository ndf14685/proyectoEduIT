<?php 
//Directiva de sesión
session_start(); //Crea una sesión si no exitse, sino usa la que hay
//Registramos variables de sesión
$_SESSION['nombre'] = "Leila";
$_SESSION['numero'] = 13;

if (isset($_GET['pelicula'])) {
	$_SESSION['pelicula'] = $_GET['pelicula'];
}

 ?>