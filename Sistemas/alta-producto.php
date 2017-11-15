<?php
	$titulo = "Panel de control - Alta de Nuevo Producto";
	//Rutina para subir imágenes *si* fueron enviadas
	require "autenticar.php";
	$ruta = "imagenes/";
	$prd_foto1 = "noDisponible1.png";
	$prd_foto2 = "noDisponible2.png";

	if($_FILES['prd_foto1']['error'] == 0){
		$prd_foto1TMP = $_FILES['prd_foto1']['tmp_name'];
		$prd_foto1 = $_FILES['prd_foto1']['name'];
		move_uploaded_file($prd_foto1TMP, $ruta.$prd_foto1);
	}
	if($_FILES['prd_foto2']['error'] == 0){
		$prd_foto2TMP = $_FILES['prd_foto2']['tmp_name'];
		$prd_foto2 = $_FILES['prd_foto2']['name'];
		move_uploaded_file($prd_foto2TMP, $ruta.$prd_foto2);
	}

	//Rutina para insertar datos en la tabla productos

	$prd_nombre = $_POST['prd_nombre'];
	$prd_descripcion = $_POST['prd_descripcion'];
	$prd_precio = $_POST['prd_precio'];
	$cat_id = $_POST['cat_id'];
	$prd_alta = date('Y-m-d');

	require "conexion.php";

	$sql = "INSERT INTO productos
						(prd_nombre ,
						prd_descripcion,
						prd_precio,
						cat_id,
						prd_alta,
						prd_foto1,
						prd_foto2)
				VALUES 
						('".$prd_nombre."',
						 '".$prd_descripcion."',
						 ".$prd_precio.",
						 ".$cat_id.",
						 '".$prd_alta."',
						 '".$prd_foto1."',
						 '".$prd_foto2."')";

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
			if ($chequeo == 1) {
				echo "Se ha agregado un nuevo producto";
			}
			
			header("refresh: 3; url= panel-productos.php");
		?>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>

</body>
</html>
