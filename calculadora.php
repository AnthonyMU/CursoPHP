<style>

	.resultado {
		color: #F00;
		font-size: 32px;
		font-weight: bold;
	}

</style>
	
<?php
	
if(isset($_POST["button"])){  
		
		$numero1=$_POST["num1"];
		$numero2=$_POST["num2"];
		$operacion=$_POST["operacion"];
	
	calcular($operacion); //llamamos a la funcion calcular
}
		
	function calcular($calculo){ //la llamamos $calculo para poder llamar de forma correcta a la funcion
		
		if(!strcmp("Suma",$calculo)){
			
			global $numero1;
			global $numero2;
			
			$resultado=$numero1+$numero2;
			
			echo "<p class='resultado'>El resultado es: $resultado </p>";
		}
		
		if(!strcmp("Resta",$calculo)){
			
			global $numero1;
			global $numero2;
			
			echo "El resultado es: " . ($numero1-$numero2);
		}
		
		if(!strcmp("Multiplicación",$calculo)){
			
			global $numero1;
			global $numero2;
			
			echo "El resultado es: " . ($numero1*$numero2);
			
		}
		
		if(!strcmp("División",$calculo)){
			
			global $numero1;
			global $numero2;
			
			echo "El resultado es: " . ($numero1/$numero2);
		}
		
		if(!strcmp("Módulo",$calculo)){
			
			global $numero1;
			global $numero2;
			
			echo "El resultado es: " . ($numero1%$numero2);
		}
		
		if(!strcmp("Incremento",$calculo)){
			
			global $numero1;
			
			$numero1++;
			
			$resultado=$numero1;
	
			
			echo "El resultado es: " . $resultado;
		}
		
		if(!strcmp("Decremento",$calculo)){
			
			global $numero1;
			
			$numero1--;
			
			$resultado=$numero1;
		
			
			echo "El resultado es: " . $resultado;
		}

		
		
	}
		
	
?>
	
</body>
</html>