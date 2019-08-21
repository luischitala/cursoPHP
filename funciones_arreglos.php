<?php 
//$amigo= array('telefono' => 3318019871, 'edad' => 20, 'pais' => 'Mexico' );
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo' );
//extract($amigo);
//$ultimo_dia = array_pop($semana);

//foreach ($semana as $dia ) {
//	echo $dia . '<br/>';
//}
//echo join(' - ', $semana);

//echo count($semana);
//sort($semana);
//echo join(', ', $semana);

$semana_reverse = array_reverse($semana);
echo join(',', $semana_reverse);


 ?>