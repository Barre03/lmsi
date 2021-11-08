<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recepción de datos</title>
</head>
<body>
	<h1>Datos recibidos del formulario</h1>
<?php
	$nombre=$_GET['nombre']??"";

	echo "<br>Nombre: $nombre";

?>	
	<p>
		<a href="10-formularios.html">[VOLVER]</a>
	</p>
</body>
</html>