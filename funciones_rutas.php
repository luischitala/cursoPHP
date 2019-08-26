<?php 

//obtiene el directorio padre del archivo
//echo pathinfo('documento.txt',PATHINFO_BASENAME);
//da la extensión
//echo pathinfo('documento.txt',PATHINFO_EXTENSION);
//nombre del archivo
//echo pathinfo('documento.txt',PATHINFO_FILENAME);
//echo pathinfo('documento.txt',PATHINFO_DIRNAME);

//trae todos los archivos con una coincidencia en nombre
//puedes ampliar los cliterios con las llaves para la extensión
//$resultados = glob('*.{php,html,txt}',GLOB_BRACE);
//print_r($resultados);
// se extrae el archivo dela ruta
//echo basename('carpeta1/carpeta2/archivo.php','.php');
echo dirname('carpeta1/carpeta2/archivo.php');

 ?>