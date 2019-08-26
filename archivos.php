<?php 

// if (file_exists('documento.txt'))
//  {
// 	echo "El archivo sí existe";

// } else{
// 	echo "El archivo no existe";
// }
// leer archivos
//echo file_get_contents('documento.txt');
//Sobreescribir
//file_put_contents('documento.txt',"Hola man \n", FILE_APPEND);
//ciclo para poner los números del 1 al 10
// file_put_contents('documento.txt', '');
// for ($i=1; $i <= 10 ; $i++) { 
// 	file_put_contents('documento.txt',"$i \n",FILE_APPEND);
// }

$archivo = file('documento.txt');
//echo "<pre>";
//print_r($archivo);
//acceder a un archivo en especifico
echo $archivo[7];
 ?>