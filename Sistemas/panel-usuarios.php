<?php
	$titulo = "Panel de Usuarios";
	require "conexion.php";
	require "autenticar.php";
	$sql = "SELECT usu_id, usu_login, usu_clave, usu_nombre, usu_email
			FROM usuarios";
	$resultado = mysqli_query($link, $sql) //Ejecuta
			or die(mysqli_error($link));

	$cantidad = mysqli_num_rows($resultado);

	mysqli_close($link);
?>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>
		<table id="paneles">
			<tr>
				<th>Login</th>
				<th>Clave</th>
				<th>Nombre</th>
				<th>Email</th>
				<th colspan="2"><a href="form-alta-usuario.php"><img src="imgs/add.png"></a></th>
			</tr>
			<?php 
				while($fila= mysqli_fetch_assoc($resultado)){
			?>
			<tr>
				<td><?php echo $fila['usu_login']; ?></td>
				<td><?php echo $fila['usu_clave']; ?></td>
				<td><?php echo $fila['usu_nombre']; ?></td>
				<td><?php echo $fila['usu_email']; ?></td>
				<td><a href="form-editar-usuario.php?usu_id=<?php echo $fila['usu_id']; ?>"><img src="imgs/editar3.png"></a></td>
				<td><a href="form-borrar-usuario.php?usu_id=<?php echo $fila['usu_id']; ?>"><img src="imgs/borrar.png"></a></td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="6" class="pie">Se han encontrado <?php echo $cantidad; ?> registros</td>
			</tr>
		</table>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>