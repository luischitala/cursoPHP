<?php 

function contar_usuarios(){
	$archivo = 'contador.txt';

	if (file_exists($archivo)) {
		$cuenta = file_get_contents($archivo) + 1;
		file_put_contents($archivo, $cuenta);

		return $cuenta;
	} else {
		file_put_contents($archivo, 1);
		return 1;
	}
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Contador de visitas</title>
 	<link rel="stylesheet" type="text/css" href="estilos.css">
 </head>
 <body>
 	<h1>Contador de visitas</h1>
 	<div class="visitantes">
 		<p class="numero" ><?php echo contar_usuarios(); ?></p>
 		<p class="texto">Visitas</p>
 	</div>
 </body>
 </html>