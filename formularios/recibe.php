<?php 
// con el método post se envian archivos
// metodo get se puede enviar información que se puede manipular
//post para información sensible
//print_r($_POST);
if ($_POST) {
	$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo 'Hola, ' . $nombre . ' eres ' . $sexo;
} else{
	header('Location: http://localhost/cursoPHP/formularios/?');
}
 ?>