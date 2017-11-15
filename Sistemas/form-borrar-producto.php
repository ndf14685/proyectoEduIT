<?php
	$titulo = "Panel de Baja de Producto";
	
	require "conexion.php";
	require "autenticar.php";
	$prd_id = $_GET['prd_id'];
	$sql = "SELECT prd_id, prd_nombre, prd_descripcion, prd_precio, prd_foto1
		                 FROM productos WHERE prd_id = ".$prd_id; 
	
	$resultado = mysqli_query($link, $sql)
			or die(mysqli_error($link));

	$fila= mysqli_fetch_assoc($resultado);

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
	<form action="borrar-producto.php" method="POST" onsubmit="return confirmarBaja()">
		<table id="paneles">
		<tr>
			<th>Nombre</th>
			<td><?php echo $fila['prd_nombre'];?></td>
		</tr>
		<tr>
			<th>Descripcion</th>
			<td><?php echo $fila['prd_descripcion'];?></td>
		</tr>
		<tr>
			<th>Precio</th>
			<td><?php echo $fila['prd_precio'];?></td>
		</tr>
		<tr>
			<th>Imagen</th>
			<td><img src="imagenes/<?php echo $fila['prd_foto1'];?>"></td>
		</tr>
		<tr>
			<td colspan="2" class="centrar">
			<input type="hidden" name="prd_id" value="<?php echo $prd_id; ?>">
			<input type="submit" value="Confirmar Baja"></td>
		</tr>
		</table>
	</form>
<script src="funciones.js"></script>
</body>
</html>
