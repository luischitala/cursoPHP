<?php 
//PDO

try{
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos','root','');
	// echo "Conexión OK".'<br/>';
	
	// // $resultados =$conexion->query('select*from usuarios');
	
	// $resultados = $conexion->query('select * from usuarios where id=2');
	// foreach ($resultados as $fila ) {
	// 	echo $fila['ID'] . ' - ' . $fila['Nombre'].'<br/>';
	// }

	$resultados = $statement ->fetchAll();
	foreach ($resultados as $usuario ) {
		echo $usuario['Nombre'];
	}

}catch(PDOExceptions $e){
	echo "Error: ". $e->getMessage();
}




 ?>