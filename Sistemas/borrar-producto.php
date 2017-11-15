<?php
	$titulo = "Panel de control - Borrar Producto";
	require 'conexion.php';
	require "autenticar.php";
	$prd_id = $_POST['prd_id'];
	$sql = "DELETE FROM productos WHERE prd_id =".$prd_id;
	
	$resultado = mysqli_query($link, $sql)
			or die(mysqli_error($link)); 

	$chequeo = mysqli_affected_rows($link);
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
<?php

	if($chequeo == 1){
		echo 'Producto borrado con éxito';
	}

?>
<br>
<a href="panel-productos.php">Volver</a>
<?php 
	header("refresh: 3; url= panel-productos.php");	
?>	
<br>
Se redirigirá en 3 segundos	
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>