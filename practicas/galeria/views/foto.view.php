<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" >
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Galeria</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo"> Foto: <?php if (!empty($foto['titulo'])) {
				echo $foto['titulo'];
			} else {
				echo $foto['imagen'];
		 	}?></h1>
		</div>
	</header>
	<div class="contenedor">
		<div class="foto">
			<img src="fotos/<?php echo $foto['imagen']; ?>">
			<p class="texto"><?php echo $foto['texto']; ?></p>
			<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
		</div>
	</div>
	<footer>
		<p class="copyright">
			Galeria creada por Luis Chitala
		</p>
	</footer>
</body>
</html>