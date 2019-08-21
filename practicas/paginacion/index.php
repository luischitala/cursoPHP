<?php 
try {
	$conexion = new PDO('mysql:host=localhost;dbname=curso_paginacion','root','');
} catch (PDOException $e) {
	echo "ERROR: " . $e->getMessage();
	die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina']:1;
$postPorPagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina): 0;
$articulos = $conexion->prepare("
	select SQL_CALC_FOUND_ROWS * from articulos 
	limit $inicio, $postPorPagina
	");
	$articulos->execute();
	$articulos = $articulos->fetchALL();
	print_r($articulos);
require 'index.view.php';
 ?>