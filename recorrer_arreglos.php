<?php 

$meses = array('enero','febrero','marzo','abril','mayo','junio',
'julio','agosto','septiembre','octubre','noviembre','diciembre');


 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Meses del año</title>
</head>
<body>
   <h1> Meses del año</h1>
   	<ul>
   		<?php 
   		foreach($meses as $mes){
   			//ejecutar algo
   			echo '<li>' . $mes .'</li>';
			}   		
   		 ?>
   		
   	</ul>
</body>
</html>