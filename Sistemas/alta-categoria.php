<?php
	$titulo = "Panel de control - Alta de Categoría";
	$cat_nombre = $_POST['cat_nombre'];
	require "conexion.php";
	require "autenticar.php";
	$sql = "INSERT INTO categorias /*Si fuera un SELECT sí o sí se guarda en una variable*/
					(cat_nombre)
				VALUES 
					('$cat_nombre')";
			/* INSERT INTO categorias
				values
					(NULL, 'heladeras');
			*/
	mysqli_query($link, $sql)
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

		<?php if($chequeo == 1){
			echo "Se ha ingresado un nuevo dato";
			}
		?>
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>