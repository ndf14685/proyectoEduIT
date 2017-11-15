<?php
	$titulo = "Usuario Editado";
	require 'conexion.php';
	require "autenticar.php";
	$usu_id = $_POST['usu_id'];
	$usu_login = $_POST['usu_login'];
	$usu_clave = $_POST['usu_clave'];
	$usu_nombre = $_POST['usu_nombre'];
	$usu_email = $_POST['usu_email'];
	$sql= "UPDATE usuarios
				SET usu_login = '".$usu_login."'
					usu_clave = '".$usu_clave."'
					usu_nombre = '".$usu_nombre."'
					usu_email = '".$usu_email."'
					WHERE usu_id =".$usu_id;
	$resultado= mysqli_query($link, $sql); 

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
	
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>