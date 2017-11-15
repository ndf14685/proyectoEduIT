<?php
	session_start();
	$usu_nombre = $_SESSION['usu_nombre'];
	session_unset();
	session_destroy();
	header('refresh: 3; url= index.php');
	$titulo = "Gracias por tu visita" $usu_nombre;
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
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>