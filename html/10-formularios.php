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
	$clave=$_GET['clave']??"";
	$referencia=$_GET['referencia']??"";
	$condiciones=$_GET['condiciones']??"NO";
	$sexo=$_GET['sexo']??"";
	$email=$_GET['email']??"";
	$edad=$_GET['edad']??"";
	$fecha=$_GET['fecha']??"";
	$prov=$_GET['prov']??"";
	$prog=$_GET['prog']??"";
	$depor=$_GET['depor']??array();
	$comentario=$_GET['comentario']??"";

	echo "<br>Nombre: $nombre";
	echo "<br>Clave: $clave";
	echo "<br>Referencia: $referencia";
	echo "<br>Condiciones: $condiciones";
	echo "<br>Sexo: $sexo";
	echo "<br>E-mail: $email";
	echo "<br>Edad: $edad";
	echo "<br>Fecha: $fecha";
	echo "<br>Provincia: $prov";
	echo "<br>Programa: $prog";
	echo "<br>Deportes:";
	//var_dump($depor);
	foreach ($depor as $value) {
	 	echo "$value ";
	}

	echo "<br>Comentario: $comentario";

?>	
	<p>
		<a href="10-formularios.html">[VOLVER]</a>
	</p>
</body>
</html>