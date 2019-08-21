<?php 
$mes = 'Diciembre';
$mes2 = 'Junio';
switch ($mes) {
	case 'Diciembre':
		echo 'Feliz Navidad';
		break;
	case 'Enero':
		echo 'Feliz Año Nuevo';
		break;
	default:
		echo "En este mes no se celebra nada";
		break;
}

if ($mes2 == 'Diciembre') {
	echo "Feliz navidad";
} else if ($mes2 == 'Enero'){
	echo "Feliz año Nuevo";
} else {
	echo "En este mes no se celebra nada";
}

 ?>