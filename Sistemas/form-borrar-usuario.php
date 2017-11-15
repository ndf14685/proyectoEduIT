<?php
	$titulo = "Panel de Baja de Usuario";
	
	require "conexion.php";
	require "autenticar.php";
	$usu_id = $_GET['usu_id'];
	$sql = "SELECT usu_id, usu_login, usu_nombre, usu_clave, usu_email
		                 FROM usuarios WHERE usu_id = ".$usu_id; 
	
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
	<form action="borrar-usuario.php" method="POST" onsubmit="return confirmarBaja()">
		<table id="paneles">
		<tr>
			<th>Login</th>
			<td><?php echo $fila['usu_login'];?></td>
		</tr>
		<tr>
			<th>Nombre</th>
			<td><?php echo $fila['usu_nombre'];?></td>
		</tr>
		<tr>
			<th>Clave</th>
			<td><?php echo $fila['usu_clave'];?></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><?php echo $fila['usu_email'];?></td>
		</tr>
		<tr>
			<td colspan="2" class="centrar">
			<input type="hidden" name="usu_id" value="<?php echo $usu_id; ?>">
			<input type="submit" value="Confirmar Baja"></td>
		</tr>
		</table>
	</form>
<script src="funciones.js"></script>
</body>
</html>
