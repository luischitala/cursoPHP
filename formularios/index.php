<?php 
if ($_POST) {
echo $_POST['nombre'];
	
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Formularios</title>
</head>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get" name="" >
		<input type="text" placeholder="Nombre:" name="nombre">
		<br>
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre" id="hombre">
		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value="mujer" id="mujer">
		<br>
		<select name="year" id="year">
			<option value="2000">2000</option>	
			<option value="2000">2001</option>	
			<option value="2000">2002</option>	
			<option value="2000">2003</option>	
			<option value="2000">2004</option>	
		</select>
		<br>
		<label for="terminos">Aceptas los terminos?</label>
		<input type="checkbox" name="terminos" id="terminos" value="ok">
		<input type="submit" name="" value="Enviar">
		<a href=""></a>
	</form>

</body>
</html>