<?php session_start();

if (isset(S_SESSION['usuario'])) {
require 'views/contenido.view.php';
	
}else {
	header('Location:login.php');
}
 ?>