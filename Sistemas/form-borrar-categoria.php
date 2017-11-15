<?php
	$titulo = "Panel de Baja de Categoría";
	
	require "conexion.php";
	require "autenticar.php";
	$cat_id = $_GET['cat_id'];
	$sql = "SELECT cat_id, cat_nombre
		                 FROM categorias WHERE cat_id = ".$cat_id; 
	
	$resultado = mysqli_query($link, $sql)
			or die(mysqli_error($link));

	$fila= mysqli_fetch_assoc($resultado);
	$cantidad = $fila;

	mysqli_close($link);

?>

<!DOCTYPE html>
<html>
<head>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo; ?></h1>
	
	<form action="borrar-categoria.php" method="post" onsubmit="return confirmarBaja()">
	
		<table id="paneles">
		<tr>
			<th>Nombre</th>
			<td><?php echo $fila['cat_id'];?></td>
		</tr>
		<tr>
			<th>Descripcion</th>
			<td><?php echo $fila['cat_nombre'];?></td>
		</tr>
		<tr>
			<td colspan="2" class="centrar">
			<input type="hidden" name="cat_id" value="<?php echo $cat_id; ?>">
			<input type="submit" value="Confirmar Baja"></td>
		</tr>
		</table>
	</form>
<script src="funcionBajaCategoria.js"></script>
</body>
</html>
