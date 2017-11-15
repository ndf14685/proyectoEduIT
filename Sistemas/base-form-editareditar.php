<?php 
	
	require 'conexion.php';
	$sql="SELECT cat_id, cat_nombre from categorias";
	$resultado= mysqli_query($link, $sql); 

	$prd_id= $_GET["prd_id"];
	$sql2 = "SELECT prd_nombre, prd_descripcion, prd_precio, prd_foto1, cat_id from productos where prd_id=".$prd_id;
	$resultado2= mysqli_query($link, $sql2); 
	$fila2 = mysqli_fetch_assoc($resultado2);


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