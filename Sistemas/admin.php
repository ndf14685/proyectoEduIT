<?php
	$titulo = "Bienvenido";
	require "autenticar.php";
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
		<table>
			<tr>
				<td><img src="imgs/usuario.png"> Administrar Usuarios</td>

			</tr>
			<tr>
				<td><img src="imgs/producto.png"> Administrar Productos</td>
			</tr>
			<tr>
				<td><img src="imgs/categoria.png"> Administrar Categorías</td>
			</tr>
		</table>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>