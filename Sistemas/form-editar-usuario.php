
<?php
	$titulo = "Formulario de modificación";
	require 'conexion.php';
	require "autenticar.php";
	
	$usu_id = $_GET['usu_id'];
	$sql = "SELECT usu_id, usu_login, usu_clave, usu_nombre, usu_email
				FROM usuarios WHERE usu_id =".$usu_id;

	$resultado = mysqli_query($link, $sql) //Ejecuta
			or die(mysqli_error($link)); 

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
		<?php $fila = mysqli_fetch_assoc($resultado); ?>
		<form action="editar-usuario.php" method="post">
			<table class="paneles">
				<tr>
					<td>Login</td>
					<td><input type="text" name="usu_login" value="<?php echo $fila['usu_login']; ?>"></td>
				</tr>
				<tr>
					<td>Clave</td>
					<td><input type="text" name="usu_clave" value="<?php echo $fila['usu_clave']; ?>"></td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td><input type="text" name="usu_nombre" value="<?php echo $fila['usu_nombre']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="usu_email" value="<?php echo $fila['usu_email']; ?>"></td>
				</tr>
				<tr>
				<input type="hidden" name="usu_id" value="<?php echo $usu_id; ?>">
					<td colspan="4" class="centrar">
						<input type="submit" value="Editar usuario">
					</td>
				</tr>
			</table>
		</form>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>