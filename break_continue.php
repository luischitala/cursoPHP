<?php 


$paises =  array('Mexico', 'España', 'Colombia', 'Peru', 'Argentina', 'Venezuela', 'Cuba' );

// foreach ($paises as $pais ) {
// 	echo $pais . '<br/>';

// 	if ($pais == 'España') {
// 		break;
// 	}
// }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Document</title>
 </head>
 <body>
 <h1>Paises Latinoamericanos</h1>
 <?php 

foreach ($paises as $pais) {
	
	if ($pais == 'España') {
		continue;
	}
	echo $pais . '<br/>';
}
  ?>
 </body>
 </html>