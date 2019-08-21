<?php 
// con el método post se envian archivos
// metodo get se puede enviar información que se puede manipular
//post para información sensible
//print_r($_POST);
// if ($_POST) {
// 	$nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $year = $_POST['year'];
// $terminos = $_POST['terminos'];

// echo 'Hola, ' . $nombre . ' eres ' . $sexo;
// } else{
// 	header('Location: http://localhost/cursoPHP/formularios/?');
// }

//print_r($_GET);
if (!$_GET) {
	header('Location : http://localhost/cursoPHP/formularios/');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year= $_GET['year'];
$terminos = $_GET['terminos'];

if ($nombre) {
	echo $nombre . '<br/>';
} else{
	echo "El usuario no estableció su nombre <br>";
}

echo $nombre. '<br/>';
echo $sexo. '<br/>';
echo $year. '<br/>';
echo $terminos. '<br/>';

 ?>