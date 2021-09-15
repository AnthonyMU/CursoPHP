<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

	if(isset($_POST["enviando"])){ //Si el ususario pulsa el boton de enviar...

		$contra=$_POST["contra"];

		$nombre=$_POST["nombre_usuario"];

		$resultado=$nombre=="Anthony" && $contra=="1234" ? "Puedes acceder" : "No puedes acceder, usuario o contraseña incorrectos";
		echo $resultado;

	}
	
?>