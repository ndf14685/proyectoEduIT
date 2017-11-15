
<?php
	$titulo = "Formulario de modificación";
	require 'conexion.php';
	require "autenticar.php";
	
	$cat_id = $_GET['cat_id'];
	$sql = "SELECT cat_id, cat_nombre
				FROM categorias WHERE cat_id =".$cat_id;

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
		<form action="editar-categoria.php" method="post">
			<table class="paneles">
				<tr>
					<td>Nombre</td>
					<td><input type="text" name="cat_id" value="<?php echo $fila['cat_id']; ?>"></td>
				</tr>
				<tr>
					<td>Descripción</td>
					<td><input type="text" name="cat_nombre" value="<?php echo $fila['cat_nombre']; ?>"></td>
				</tr>
				<tr>
					<td colspan="2" class="centrar">
						<input type="submit" value="Editar categoria">
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