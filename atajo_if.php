<?php 

$edad = 18;
$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad' ;

if(isset($edad)){
	$edad = $edad;
} else {
	$edad = 'El usuario no estalbecio su edad';
}


echo 'Edad' . $edad;

 ?>