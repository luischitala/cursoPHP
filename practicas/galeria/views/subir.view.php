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
			<h1 class="titulo"> Mi Increíble Galeria en PHP y MySQL</h1>
		</div>
	</header>
	<div class="contenedor">
		<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<label for="foto">Selecciona tu foto</label>
			<input type="file" id="foto" name="foto" >

			<label for="titulo">Título de la foto</label>
			<input type="text" id="titulo" name="titulo">

			<label for="texto">Descripción: </label>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>
			<?php if (isset($error)): ?>
			<p class="error"><?php echo $error; ?></p>
			<?php endif ?>
			<input type="submit" class="submit" value="Subir Foto" name="">
		</form>
	</div>
	<footer>
		<p class="copyright">
			Galeria creada por Luis Chitala
		</p>
	</footer>
</body>
</html>