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
	//para evitar que el usuario inyecte código
	if (!empty($mensaje)) {
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores .= 'Por favor ingresa el mensaje <br/>';
	}
	if (!$errores) {
		$enviar_a = 'luis@gmail.com';
		$asunto = 'Correo enviado desde miPagina.com';
		$mensaje_preparado =  "De: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje:" . $mensaje;
		//mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = true;
	}
}

require 'index.view.php';

 ?>

<!--  <div class="alert error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
			</div>
<div class="alert success">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</div> -->