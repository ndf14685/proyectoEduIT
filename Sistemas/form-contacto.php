<?php
	$titulo = "Panel de control - Proyecto integrador";
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
		<form action= "contacto.php" method="post">
			<table class="paneles">
				<tr>
					<th>Nombre:</th>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<th>Email:</th>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<th>Comentario:</th>
					<td><textarea></textarea></td>
				</tr>
				<tr>
					<td colspan="2" class="centrar"><input type="submit" value="Enviar"></td>
				</tr>
			</table>
		</form>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>