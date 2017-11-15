<?php
	$titulo = "Panel de control - Borrar Categoría";
	require 'conexion.php';
	require "autenticar.php";
	$cat_id = $_POST['cat_id'];
	$sql = "DELETE FROM categorias WHERE cat_id =".$cat_id;
	
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
		echo 'Categoría borrada con éxito';
	}

?>
<br>
<a href="panel-categorias.php">Volver</a>
<?php 
	header("refresh: 3; url= panel-categorias.php");	
?>	
<br>
Se redirigirá en 3 segundos	
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>