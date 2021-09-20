<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php
   
  // $semana[0]="Lunes";

   //$semana[1]="Martes";

  //$semana[2]="Miercoles";

  //$semana[3]="Jueves";

  //$semana=array("Lunes", "Martes","Miercoles","Jueves");

   //echo $semana[1];


   $datos=array("Nombre"=>"Juan,","Apellido"=>"Gómez","Edad"=>"21");

   $datos["País"]="España";

   // if(is_array($datos)){ //is_array devuelve un true o un false

      //  echo "Es un array"; 

    //}else{

        //echo "No esun array";

    //}

    foreach($datos as $clave=>$valor){

        echo "A $clave le corresponde $valor <br/>";

    }

    //$semana[]="Lunes";

    //$semana[]="Martes";

    //$semana[]="Miercoles";

    //$semana[]="Jueves";

    //for($i=0;$i<count($semana);$i++){

        //echo $semana[$i] . "<br>";

    //}
    


   ?>




    
</body>
</html>