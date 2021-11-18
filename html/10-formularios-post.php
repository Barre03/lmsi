<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recepción formulario POST</title>
</head>
<body>
	<h1>Recepción formulario POST</h1>	
</body>

<?php 
	
	$nombre=$_POST['nombre']??"";


	echo "Nombre: $nombre ";

	


?>
	<p>
		<a href="10-formularios.html">[VOLVER]</a>
	</p>
</html>