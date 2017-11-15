<?php
	//rutina para subir imágenes si fueron enviadas
	$ruta = "imagenes/";
	$sqlFoto1 = $sqlFoto2 = "";
	if( $_FILES['prd_foto1']['error']==0 ){
		$prd_foto1TMP = $_FILES['prd_foto1']['tmp_name'];
		$prd_foto1 = $_FILES['prd_foto1']['name'];
		move_uploaded_file($prd_foto1TMP, $ruta.$prd_foto1);
		$sqlFoto1 = ", prd_foto1 = '".$prd_foto1."'";
	}
	if( $_FILES['prd_foto2']['error']==0 ){
		$prd_foto2TMP = $_FILES['prd_foto2']['tmp_name'];
		$prd_foto2 = $_FILES['prd_foto2']['name'];
		move_uploaded_file($prd_foto2TMP, $ruta.$prd_foto2);
		$sqlFoto2 = ", prd_foto2 = '".$prd_foto2."'";
	}


	//rutina para modificar datos en tabla productos
	$prd_nombre = $_POST['prd_nombre'];
	$prd_descripcion = $_POST['prd_descripcion'];
	$prd_precio = $_POST['prd_precio'];
	$cat_id = $_POST['cat_id'];
	$prd_id = $_POST['prd_id'];

	require "conexion.php";

	$sql = "UPDATE productos 
				SET 
					prd_nombre = '".$prd_nombre."',
					prd_descripcion = '".$prd_descripcion."',
					prd_precio = ".$prd_precio.",
					cat_id = ".$cat_id;

		$sql .= $sqlFoto1;
		$sql .= $sqlFoto2;

	$sql .=	" WHERE prd_id = ". $prd_id;

	mysqli_query($link, $sql) or die(mysqli_error($link));

	$chequeo = mysqli_affected_rows($link);

	mysqli_close($link);
?>