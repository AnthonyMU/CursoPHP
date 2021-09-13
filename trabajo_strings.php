<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	
<style>
	
	.resaltar{
		color: #F00;
		font-weight: bold;
			
	}	
	
</style>	

</head>

<body>
	
	<?php
	
		$variable1="casa";
		$variable2="CASA";
		
		$resultado=strcmp($variable1,$variable2);// Devuelve 1 si no son iguales, y 0 si son iguales
		$resultado=strcmp($variable1,$variable2);// Devuelve 1 si no son iguales, y 0 si son iguales
		
		
	
		if ($resultado){
			
			echo "No coinciden";
		} else {
			
			echo "Coinciden";
		}
	
	?>
	
	
	
</body>
</html>