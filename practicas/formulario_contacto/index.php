<?php 

$errores = '';
$enviado = '';
if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

	}else{
		$errores .= 'Por favor ingresa un nombre <br/>';
	}
	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if (!filter_var($correo,FILTER_VALIDATE_EMAIL)) {
			$errores .= 'Por favor ingresa un correo valido <br/>';
		}
	}else {
		$errores .= 'Por favor ingresa un correo <br/>';
	}
}

require 'index.view.php';

 ?>

<!--  <div class="alert error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
			</div>
<div class="alert success">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</div> -->