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

    $palabra="JUAN";

    echo (strtolower($palabra));

    $palabra="JUAN";

    echo (strtoupper($palabra));


    function suma($num1, $num2){

        $resultado=$num1+$num2;

        return $resultado;

    }

    suma(5,7);


?>


    
</body>
</html>