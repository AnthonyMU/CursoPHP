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

    for($i=0;$i<=10;$i++){

        echo "<p>Hemos entrado en el bucle</p>";

        if($i==6){

            echo "<p>Bucle interrumpido<p/>";

            break;

        }

    }

    for($i=0;$i<=10;$i++){

        echo "9 x $i = " . 9*$i . "<br/>";

    }

    echo "Hemos salido del bucle <br/>";

 
    for($i=10;$i>=-10;$i--){

        if($i==0){

            echo "Division por 0 no es posible<br/>";

            continue;

        }

        echo "9 / $i = " . 9/$i . "<br/>";

    }

    echo "Hemos salido del bucle";

    

?>




</body>
</html>