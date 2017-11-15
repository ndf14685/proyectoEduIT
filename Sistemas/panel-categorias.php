<?php
	$titulo = "Panel de control - Categorías";
	require "conexion.php";
	require "autenticar.php";
	$sql = "SELECT cat_id, cat_nombre
		                 FROM categorias"; 
	
	$resultado = mysqli_query($link, $sql) //Ejecuta
			or die(mysqli_error($link));

	$cantidad = mysqli_num_rows($resultado);

	mysqli_close($link); //Cierra conexiòn

?>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo; ?></h1>
		
		<table id="paneles">
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th colspan="2"><a href="form-alta-categorias.php"><img src="imgs/add.png"></a></th>
			</tr>
			<?php 
				while($fila= mysqli_fetch_assoc($resultado)){ //Assoc para mostrar con los nombres de los campos
			?>
			<tr>
				<td class="lista"><?php echo $fila['cat_id']; ?></td>
				<td class="lista"><?php echo $fila['cat_nombre']; ?></td>
				<td class="lista"><a href="form-editar-categoria.php?cat_id=<?php echo $fila['cat_id']; ?>"><img src="imgs/editar3.png"></td>
				<td class="lista"><a href="form-borrar-categoria.php?cat_id=<?php echo $fila['cat_id']; ?>"><img src="imgs/borrar.png"></td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="4" class="pie">Se han encontrado <?php echo $cantidad; ?> registros</td>
			</tr>
		</table>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
<!-- Hacer tabla como captura panel-categorias, panel-productos (SAVE AS de index) y panel usuarios
	 repasar INSERT y WHERE -->
</body>
</html>