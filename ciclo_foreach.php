<?php 

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 
	'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
//arreglo asociativo
$alejandro = array('telefono' => 54743221, 'edad' => 20, 'pais' => 'Mexico');

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 
 <ul>
 	<?php 
 		//foreach($meses as $mes){
 		//	echo '<li>' . $mes .'</li>';
 		//}
//arreglos asociativos
 	foreach ($alejandro as $dato => $valor) {
 			echo '<li>' . $dato . ':' . $valor . '</li>';

 	}

 	 ?>
 </ul>
 </body>
 </html>