<?php
	$titulo = "Alta de Nuevo Usuario";

	$usu_login = $_POST['usu_login'];
	$usu_clave = $_POST['usu_clave'];
	$usu_nombre = $_POST['usu_nombre'];
	$usu_email = $_POST['usu_email'];
	

	require "conexion.php";
	require "autenticar.php";

	$sql = "INSERT INTO usuarios 
					(usu_login, usu_clave, usu_nombre, usu_email)
				VALUES 
					('$usu_login', '$usu_clave', '$usu_nombre', '$usu_email')";
			
	$resultado = mysqli_query($link, $sql)
		or die(mysqli_error($link));

	$fila = mysqli_fetch_assoc($resultado);

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
		</table>
		
		
		<?php //	header("refresh: 3; url= panel-usuarios.php"); ?>
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>

</body>
</html>
