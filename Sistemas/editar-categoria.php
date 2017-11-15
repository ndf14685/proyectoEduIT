<?php 
	require 'conexion.php';
	require "autenticar.php";
	
	$cat_id= $_POST['cat_id'];
	$cat_nombre= $_POST['cat_nombre'];
	
	$sql= "UPDATE categorias
				SET cat_id =".$cat_id.",
					cat_nombre = ".$cat_nombre.
	
	$resultado= mysqli_query($link, $sql); 

	$fila = mysqli_fetch_assoc($resultado);

	mysqli_close($link); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	
</body>
</html>