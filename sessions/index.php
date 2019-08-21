<?php 
//sesiones
session_start();

$_SESSION['nombre'] = 'Luis';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sessions</title>
</head>
<body>
	<h1>Página de inicio</h1>
	<p></p>
	<a href="pagina2.php">Ir a la página 2</a>
</body>
</html>