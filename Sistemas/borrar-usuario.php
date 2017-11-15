<?php
	$titulo = "Panel de control - Borrar Usuario";
	require 'conexion.php';
	require "autenticar.php";
	$usu_id = $_POST['usu_id'];
	$sql = "DELETE FROM usuarios WHERE usu_id =".$usu_id;
	
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
		echo 'Usuario borrado con éxito';
	}

?>

<?php 
	header("refresh: 3; url= panel-usuarios.php");	
?>	
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>