<?php
	$titulo = "Formulario de modificación";
	require 'conexion.php';
	require "autenticar.php";
	
	$sql = "SELECT cat_id, cat_nombre
				FROM categorias";

	$prd_id = $_GET['prd_id'];
	$sql2 = "SELECT prd_nombre, prd_descripcion, prd_precio, prd_foto1, prd_foto2, cat_id
				FROM productos WHERE prd_id =".$prd_id;
	
	$resultado = mysqli_query($link, $sql) //Ejecuta
			or die(mysqli_error($link)); 

	$resultado2 = mysqli_query($link, $sql2) //Ejecuta
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
		<?php $fila2 = mysqli_fetch_assoc($resultado2); ?>
		<form action="editar-producto.php" method="post" enctype="multipart/form-data"> <!-- enctype para poder enviar las imagenes -->
			<table id="paneles">
				<tr>
					<td>Nombre</td>
					<td><input type="text" name="prd_nombre" value="<?php echo $fila2['prd_nombre']; ?>"></td>
				</tr>
				<tr>
					<td>Descripcion</td>
					<td><textarea name="prd_descripcion" rows="6"><?php echo $fila2['prd_descripcion']; ?></textarea></td>
				</tr>				
				<tr>
					<td>Precio</td>
					<td><input type="text" name="prd_precio" value="<?php echo $fila2['prd_precio']; ?>"></td>
				</tr>			
				<tr>
					<td>Categoria</td>
					<td>
				<select name="cat_id">
					<?php while ( $fila = mysqli_fetch_assoc($resultado) ) { ?>
						<option <?php 
							if( $fila['cat_id'] == $fila2['cat_id'] ){
								echo 'selected';
							}
					 ?> value="<?php echo $fila['cat_id'] ?>"><?php echo $fila['cat_nombre'] ?></option>	
					<?php } ?>
				</select>
					</td>						
				</tr>
				<tr>
					<td>Imagen actual</td>
					<td><img src="imagenes/<?php echo $fila2['prd_foto1']; ?>"></td>
				</tr>
				<tr>
					<td>Imagen miniatura</td>
					<td><input type="file" name="prd_foto1"></td>
				</tr>	
				<tr>
					<td>Imagen ampliada</td>
					<td><input type="file" name="prd_foto2"></td>
				</tr>
				<tr>
				<input type="hidden" name="prd_id" value="<?php echo $prd_id; ?>">
					<td colspan="2" class="centrar">
						<input type="submit" value="Modificar producto"/>
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